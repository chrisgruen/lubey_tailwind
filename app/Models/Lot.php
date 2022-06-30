<?php

namespace App\Models;

//use App\Family;
//use App\Jobs\UpdateLeftMenuCache;
//use App\ToolService;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;

class Lot extends Model {
    use  SoftDeletes;

    protected $table = 'lots';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    public static function boot() {
        parent::boot();

        static::deleting(function (Lot $lot) { // before delete() method call this
            Log::info('deleteing Slices from Lot: ' . $lot->name);
            $lot->slices->each(function (Slice $slice) {
                $slice->delete();
            });
            Log::debug('reordering lots');
            $higher_lots = Lot::where('allocation_id', $lot->allocation_id)->where('sort_order', '>', $lot->sort_order)->get();
            foreach ($higher_lots as $lot_i) {
                $lot_i->sort_order--;
                $lot_i->save();
            }
        });

        static::updated(function ($lot) {
            if (array_key_exists('state', $lot->changes)) {
                Bus::dispatch(new UpdateLeftMenuCache(['allocCounts']));
            }
        });

        static::created(function ($lot) {
            $allocation = $lot->allocation;
            if ($allocation->lots->count()) {
                $allocation->revalidateAllocationVerifications();
            }
        });

        static::bootSoftDeletes();
    }

    public function getModelName() {
        return $this->name;
    }

    public function bill() {
        return $this->hasOne('App\Bill');
    }

    public function unit() {
        return $this->belongsTo('App\Models\Unit');
    }


    public function slices() {
        return $this->hasMany('App\Models\Slice');
    }

    public function allocation() {
        return $this->belongsTo('App\Models\Allocation');
    }

    public function index() {
        return $this->belongsTo('App\Models\Index');
    }

    public function lotbiddings() {
        return $this->hasMany('App\Models\LotBiddings')->with('attendance');
    }

    public function lotbiddingsByBidder() {
        return $this->hasMany('App\Models\LotBiddings')->with('attendance')->where('company_id', auth()->company_id());
    }

    public function cpvcodes() {
        return $this->belongsToMany('App\Models\CpvCode', 'lot_cpvcodes');
    }

    public function participations() {
        return $this->hasMany('App\Models\Participation');
    }

    public function storage() {
        return $this->belongsTo('App\Storage');
    }

    public function storageDelivery() {
        return $this->belongsTo('App\Storage', 'storage_id_delivery');
    }

    public function family() {
        return $this->belongsTo('App\Models\Family');
    }

    public function loadingTech() {
        return $this->belongsToMany('App\LoadingTech', 'lot_loading_tech');
    }

    public function delivery_spec() {
        return $this->hasOne('App\DeliverySpecs');
    }

    public function documents() {
        return $this->hasMany('Alloc\LotDocument');
    }

    public function winner() {
        return $this->belongsTo('App\Models\Company', 'company_id_winner');
    }

    public function winner_user() {
        return $this->belongsTo('App\User', 'user_id_winner');
    }

    public function attendances() {
        return $this->belongsToMany('Alloc\AllocationAttendance', 'attendance_lots');
    }

    public function hasAccess($allocation) {
        if (in_array($allocation->state, ['first_offer', 'qualification']))
            return true;
        if ($allocation->company_id == Auth::company_id())
            return true;
        if (in_array($allocation->state, ['qualified', 'running', 'post_qualification', 'post_qualified', 'awarded','paused'])) {
            $participation = $this->participations()->where('company_id', Auth::company_id())->first();
            //dd($participation);
            if ($participation && $participation->validation_result == 'allowed' && $participation->state == 'confirmed')
                return true;
        }

        return false;
    }

    public static function getOwnBiddings($custom_url, $filters = array(), $selector = 'all', $perPage = 10) {
        $own_bids = LotBiddings::select(\DB::raw('distinct(lot_id) as lot_id'))->where('company_id', Auth::company_id())->get();
        $own_attendings = AllocationAttendance::query()->with(['allocation'])->where('company_id', Auth::company_id())->get();

        $lots_attended = [];
        foreach ($own_attendings as $attending) {
            if ($attending->allocation) {
                foreach ($attending->allocation->lots as $lot) {
                    $lots_attended[] = $lot->id;
                }
            }
        }
        $lot_ids = array();
        foreach ($own_bids->all() as $own_bid) {
            $lot_ids[] = $own_bid->lot_id;
        }
        $lots_no_bid = array_diff($lots_attended, $lot_ids);

        $allocation_ids = array();
        foreach ($own_attendings as $attendance) {
            $allocation_ids[] = $attendance->allocation_id;
        }

        $own = Lot::query()->with(['allocation', 'slices', 'slices.substances', 'slices.material', 'unit', 'family', 'slices.storagePickup', 'slices.storageDelivery', 'lotbiddings'])
            ->where(function ($query) use ($lot_ids, $allocation_ids) {
                $query->whereIn('lots.id', $lot_ids)->orWhereIn('lots.allocation_id', $allocation_ids);
            });

        foreach ($filters as $filter => $val) {
            if ($filter == 'auctionFamiliesFilter') {
                $own = $own->whereIn('family_id', Family::query()->whereIn('name', explode(',', $val))->get(['id'])->pluck('id'));
            }
            if ($filter == 'auctionStoragesFilter') {
                $own = $own->whereHas('slices.storagePickup', function ($q) use ($val) {
                    $q->whereIn('storages.name', explode(',', $val));
                });
//                $own = $own->wherein('storages.name', explode(',', $val));
            }
            if ($filter == 'auctionTransportTypeFilter') {
                $own = $own->whereHas('slices', function ($q) use ($val) {
                    $q->where('transport_type', $val);
                });
            }
        }

        if ($selector === 'active') {
            $own = $own->whereHas('allocation', function ($q) {
                $q->whereIn('state', ["running", "first_offer", "qualification", "qualified", "post_qualification", "post_qualified"]);
            });
        }
        if ($selector === 'closed') {
            $own = $own->whereHas('allocation', function ($q) {
                $q->whereIn('state', ["ended", "endedEmpty", "canceled"]);
            });
        }

        //dd($own->toSql());

//        if (!empty($auctionType))
//            $own = $own->where('type', $auctionType);
        //$own = $own->orderBy('auction_end', 'desc');

        $own = $own->get()->sortBy(function ($lot, $key) {
            return $lot->allocation->auction_end;
        });

        $ret = array(
            'active'             => array(),
            'endedLost'          => array(),
            'endedWon'           => array(),
            'ended'              => array(),
            'endedEmpty'         => array(),
            'canceled'           => array(),
            'running'            => array(),
            'first_offer'        => array(),
            'qualification'      => array(),
            'qualified'          => array(),
            'post_qualification' => array(),
            'post_qualified'     => array()
        );

        $activeBids = [];
        $activeNoBids = [];

        foreach ($own as $key => $oa) {

            $avvs = new Collection();
            $substances = new Collection();
            $own[$key]['declared'] = true;
            foreach ($oa->slices as $slice) {
                $avvs = $avvs->merge($slice->material->avvid);
                $substances = $substances->merge($slice->substances);
            }
            $own[$key]['avvs'] = $avvs->unique()->implode(', ');
            $own[$key]['substances'] = $substances->unique()->implode('name', ', ');
            $ownbid = Lot::evalBids($oa);

            $own[$key]['bid_status'] = $ownbid['bid_status'];
            $own[$key]['own_bid'] = $ownbid['own_bid'];
            $own[$key]['rank'] = $ownbid['rank'];
            switch ($oa->allocation->state) {
                case "running":
                case "first_offer":
                case "qualification":
                case "qualified":
                case "post_qualification":
                case "post_qualified":
                    //$ret['active'][] = $own[$key];
                    if (in_array($own[$key]->id, $lots_no_bid)) {
                        $activeNoBids[] = $own[$key];
                    } else {
                        $activeBids[] = $own[$key];
                    }
                    $ret['active'] = array_merge($activeBids, $activeNoBids);
                    $ret[$oa->allocation->state][] = $own[$key];
                    break;
                case "ended":
                case "endedEmpty":
                    if ($oa->company_id_winner != Auth::company_id()) {
                        $ret['endedLost'][] = $own[$key];
                    } else {
                        $ret['endedWon'][] = $own[$key];
                    }
                    $ret[$oa->allocation->state][] = $own[$key];
                    break;
                case "canceled":
                    $ret['canceled'][] = $own[$key];
                    break;
            }
        }
        return $ret;
    }

    public static function getBiddings($filters = array()) {

        $bids = LotBiddings::select(\DB::raw('distinct(lot_id) as lot_id'))->get();
        $attendings = AllocationAttendance::all();
        $lots_all = [];
        foreach ($bids->all() as $bid) {
            if (!$bid->company_id)
                continue;
            if (!array_key_exists($bid->company_id, $lots_all)) {
                $lots_all[$bid->company_id] = ['lot_ids' => [], 'allocation_ids' => [], 'lots' => null];
            }
            $lots_all[$bid->company_id]['lot_ids'][] = $bid->lot_id;
        }
        $allocation_ids = array();
        foreach ($attendings as $attendance) {
            if (!$attendance->company_id)
                continue;
            if (!array_key_exists($attendance->company_id, $lots_all)) {
                $lots_all[$attendance->company_id] = ['lot_ids' => [], 'allocation_ids' => [], 'lots' => null];
            }
            $lots_all[$attendance->company_id]['allocation_ids'][] = $attendance->allocation_id;
        }
        $ret = [];
        $lots_all = array_filter($lots_all);

        foreach ($lots_all as $company_id => $ids) {

            $lots_all[$company_id]['lots'] = Lot::query()->with(['allocation', 'slices', 'slices.substances', 'slices.material', 'unit', 'family'])
                ->where(function ($query) use ($ids) {
                    $query->whereIn('lots.id', $ids['lot_ids'])->orWhereIn('lots.allocation_id', $ids['allocation_ids']);
                });

            $lots_all[$company_id]['lots'] = $lots_all[$company_id]['lots']->get()->sortBy(function ($lot, $key) {
                return $lot->allocation->auction_end;
            });


            $ret[$company_id] = array('running' => array(), 'endedLost' => array(), 'endedWon' => array(), 'canceled' => array());
            foreach ($lots_all[$company_id]['lots'] as $key => $oa) {

                $avvs = new Collection();
                $substances = new Collection();
                $lots_all[$company_id]['lots'][$key]['declared'] = true;
                foreach ($oa->slices as $slice) {
                    $avvs = $avvs->merge($slice->material->avvid);
                    $substances = $substances->merge($slice->substances);
                }
                $lots_all[$company_id]['lots'][$key]['avvs'] = $avvs->unique()->implode(', ');
                $lots_all[$company_id]['lots'][$key]['substances'] = $substances->unique()->implode('name', ', ');
                $ownbid = Lot::evalBids($oa, $company_id);

                $lots_all[$company_id]['lots'][$key]['bid_status'] = $ownbid['bid_status'];
                $lots_all[$company_id]['lots'][$key]['own_bid'] = $ownbid['own_bid'];
                $lots_all[$company_id]['lots'][$key]['rank'] = $ownbid['rank'];

                switch ($oa->allocation->state) {
                    case "running":
                    case "first_offer":
                    case "qualification":
                    case "qualified":
                    case "post_qualification":
                    case "post_qualified":
                        $ret[$company_id]['running'][] = $lots_all[$company_id]['lots'][$key];
                        break;
                    case "ended":
                    case "endedEmpty":
                        if ($oa->company_id_winner != $company_id) {
                            $ret[$company_id]['endedLost'][] = $lots_all[$company_id]['lots'][$key];
                        } else {
                            $ret[$company_id]['endedWon'][] = $lots_all[$company_id]['lots'][$key];
                        }
                        break;
                    case "canceled":
                        $ret[$company_id]['canceled'][] = $lots_all[$company_id]['lots'][$key];
                        break;
                }
            }
        }
        return $ret;
    }


    public static function evalBids(Lot $lot, $company_id = null) {
        if (!$company_id)
            $company_id = Auth::company_id();
        $retval = array('own_bid' => false, 'rank' => null, 'bid_status' => 'none');
        $own_bid_amount = null;
        $bid_status = 'none';
        $rank = null;
        if ($lot->index_binding == 1) {
            $max_limit = $lot->max_limit_per_unit;
        } else {
            $max_limit = $lot->max_limit;
        }
        $all = new Collection();
        $bidders = LotBiddings::query()->where('lot_id', $lot->id)->where('is_valid', true)->get()->groupBy('company_id');
        foreach ($bidders as $biddings) {
            $all->push($biddings->sortByDesc('amount')->first());
        }
        $biddings = $all->sort(function ($a, $b) {
            if ($a->amount == $b->amount) {
                return (strtotime($a->created_at) > strtotime($b->created_at)) ? 1 : -1;
            }
            return ($a->amount < $b->amount) ? 1 : -1;
        })->values();
        if ($biddings->count() > 0) {
            $pos = 1;
            foreach ($biddings as $bidding) {
                if ($company_id == $bidding->company_id) {
                    $rank = $pos;
                    $own_bid_amount = $bidding->amount;
                }
                $pos++;
            }
            //Rang korrigieren bei privaten Vergaben wenn Mindestgebot nicht erreicht
            if ($lot->allocation->legal_base == 'private') {
                $highest_bid = $biddings->first()->amount;
                if ($max_limit > $highest_bid) {
                    $rank++;
                }
            }
        }
        if ($rank == 1)
            $bid_status = 'green';
        if ($rank > 1)
            $bid_status = 'red';
        $retval['bid_status'] = $bid_status;
        $retval['rank'] = $rank;
        $retval['own_bid'] = $own_bid_amount;
        return $retval;
    }


    /**
     * @param $user_id
     * @param array $filters
     * @param int $perPage
     * @param $custom_url
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getFavorites($filters = array(), $perPage = 10, $custom_url = "bla") {
        $favs = LotFavorite::query()->with('lot', 'lot.allocation')->where('company_id', Auth::company_id())->get();
        $allocations = $favs->pluck('lot.allocation')->unique('id');
        $lots = Lot::query()->with(['allocation', 'slices', 'slices.substances', 'slices.material', 'unit', 'family'])->whereIn('lots.id', $favs->pluck('lot_id')->all());
        foreach ($filters as $filter => $val) {
            if ($filter == 'auctionFamiliesFilter') {
                $lots = $lots->wherein('family_id', Family::query()->whereIn('name', explode(',', $val))->get(['id'])->pluck('id'));
            }
        }
        $lots = $lots->get();
        //$lots->withPath($custom_url);
        foreach ($allocations as $allocation) {
            $allocation->lots = $lots->where('allocation_id', $allocation->id);
        }
        /*        foreach ($lots as $key => $oa) {
                    $avvs = new Collection();
                    $substances = new Collection();
                    foreach ($oa->slices as $slice) {
                        $avvs = $avvs->merge($slice->material->avvid);
                        $substances = $substances->merge($slice->substances);
                    }
                    $lots[$key]['avvs'] = $avvs->unique()->implode(', ');
                    $lots[$key]['substances'] = $substances->unique()->implode('name', ',');
                    $ownbid = Lot::evalBids($oa);
                    $lots[$key]['bid_status'] = $ownbid['bid_status'];
                    if ($ownbid['bid_status'] == "none")
                        $lots[$key]['bid_status'] = "noBid";
                    $lots[$key]['own_bid'] = $ownbid['own_bid'];
                }*/
        return $allocations;
    }

    public function finalize() {
        $total_price = 0;
        $total_est_value = 0;
        $total_quantity = 0;

        foreach ($this->slices as $slice_i) {
            $total_price += $slice_i->target_price;
            $total_est_value += $slice_i->est_value;
            $total_quantity += $slice_i->quantity;
        }
        $this->fee_price_per_tonne = ToolService::getPriceByAmount($total_quantity, $this->family->price_model);
        $this->max_limit = $total_price;
        if ($total_quantity) {
            $this->max_limit_per_unit = $total_price / $total_quantity;
        } else {
            $this->max_limit_per_unit = 0;
        }
        $this->est_value = $total_est_value;
        $this->state = 'finalized';
        $this->save();
    }

    public function clone() {
        $new_lot = $this->replicate();

        $new_lot->name = ToolService::unique_random("allocations", "name", 12);

        $new_lot->reset();

        return $new_lot;
    }

    public function reset() {

        $this->state = "new";
        $this->perf_period_start = now();
        $this->perf_period_end = date("Y-m-d H:i:s", strtotime("+7 day"));

        $this->rating = "";
        $this->rating_winner = "";
        $this->company_id_winner = null;
        $this->contract_conclusion_date = null;
        $this->contract_confirmation_date = null;
        $this->cancel_requested = null;
        $this->canceled_at = null;
        $this->cancel_reason = null;
        $this->cancel_reason_text = null;
        $this->billing_state = null;
        $this->first_offers_validated = 0;
        $this->auction_offers_validated = 0;
        $this->deleted_at = null;

    }

    public function get_index_value($date = false) {
        if ($this->index->progression == 'relative') {
            $index_value = $this->index_value;
        } else {
            if ($date)
                $index_value = $this->index->get_value_at_date($date);
            else
                $index_value = $this->index->get_current_value();
        }
        return $index_value;
    }

    public function get_fee($amount, $date = false) {
        $price = abs($amount);
        $price_per_tonne = $this->fee_price_per_tonne;
        $fee_percent_quotient = $this->allocation->fee_percent_quotient;
        $absTons = $this->slices->sum('quantity');
        $ground_fee = $absTons * $price_per_tonne;

        if ($amount === false) {
            $tempFee = 0;
        } else {
            if ($this->index_binding == 0) {
                $tempFee = $price * $fee_percent_quotient;
            } else {
                if ($this->index->progression == 'relative') {
                    $index_value = $this->index_value;
                } else {
                    if ($date)
                        $index_value = $this->index->get_value_at_date($date);
                    else
                        $index_value = $this->index->get_current_value();
                }
                $price = abs($index_value + $amount);
                $tempFee = $price * $fee_percent_quotient * $absTons;
            }
        }
        if ($this->allocation->legal_base == 'public') {
            $tempFee = abs($this->est_value) * $fee_percent_quotient;
        }
        if ($tempFee >= $ground_fee) {
            $fee['fee'] = $tempFee;
            $fee['base'] = "relative";
            $fee['factor'] = $price;
        } else {
            $fee['fee'] = $ground_fee;
            $fee['base'] = "absolute";
            $fee['factor'] = $absTons;
        }
        $fee['fee'] = round($fee['fee'], 2);

        return $fee;
    }
}

