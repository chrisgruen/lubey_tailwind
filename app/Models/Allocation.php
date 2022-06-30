<?php

namespace App\Models;

//use App\Family;
//use App\Geo;
use App\Http\Controllers\Controller;
//use App\Jobs\UpdateLeftMenuCache;
use App\Notifications\Allocation\AllocationAwarded;
//use App\ToolService;
use Auth;

use Barryvdh\DomPDF\PDF;
//use Brick\PhoneNumber\PhoneNumber;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Allocation extends Model {

    use SoftDeletes;


    public static $times = array('tedDelayDays', 'offerLimitDays', 'qualificationRequestDeadlineDays', 'qualificationResponseDays',
        'qualificationVerificationDays', 'auctionStartsAfterDays', 'auctionRunsDays', 'postQualificationRequestDeadlineDays', 'postQualificationResponseDays',
        'postQualificationVerificationDays', 'bindingLimitDays');

    public static $states = array();
    protected $table = 'allocations';
    public $timestamps = true;

    public static function boot() {
        parent::boot();

        static::deleting(function (Allocation $allocation) { // before delete() method call this
            Log::info('deleteing Lot from Allocation: ' . $allocation->name);
            $allocation->lots->each(function (Lot $lot) {
                $lot->delete();
            });
            // TODO TG delete everything else :P
            Log::info('deleteing AllocationVerification from Allocation: ' . $allocation->name);
            $allocation->allocation_verifications->each(function (AllocationVerification $av) {
                $av->delete();
            });
        });

        static::updated(function (Allocation $allocation) {
            if (array_key_exists('state', $allocation->changes)) {
                Bus::dispatch(new UpdateLeftMenuCache(['allocCounts']));
            }
        });
    }

    public
    function getModelName() {
        return $this->name;
    }

    public
    function lots() {
        return $this->hasMany('App\Models\Lot');
    }

    public
    function verifications() {
        return $this->belongsToMany('Alloc\Verification')
            ->where('confirmed', '=', 1)
            ->withPivot('id', 'proof_provision', 'is_active', 'is_editable', 'for_subcontractor');
    }

    public
    function user() {
        return $this->belongsTo('App\User');
    }

    public function notify_persons() {
        return $this->belongsToMany('App\User','allocation_notify_persons');
    }

    public
    function company() {
        return $this->belongsTo('App\Models\Company');
    }

    public
    function division() {
        return $this->belongsTo('App\Division');
    }

    public
    function contactPerson() {
        return $this->belongsTo('App\User', 'user_id');
    }


    public
    function cpvcode() {
        return $this->belongsTo('App\Models\CpvCode', 'cpv_code_id');
    }

    public
    function nutsCode() {
        return $this->belongsTo('App\Models\NutsCode');
    }

    public
    function attendances() {
        return $this->hasMany('App\Models\AllocationAttendance');
    }

    public
    function requests() {
        return $this->hasMany('App\Models\AllocationRequest');
    }

    public
    function informations() {
        return $this->hasMany('App\Models\AllocationInformation');
    }

    public
    function all_participations() {
        $this->load(['lots.participations' => function ($q) use (&$participations) {
            $participations = $q->get();
        }]);
        return $participations;
    }

    public function allocation_verifications() {
        return $this->hasMany('App\Models\AllocationVerification');
    }

    public function verification_requests() {
        return $this->hasMany('App\Models\AllocationVerificationRequest');
    }

    public function allocation_information_documents() {
        return $this->hasMany('App\Models\AllocationInformationDocument');
    }

    public function biddings() {
        return $this->hasMany('App\Models\LotBiddings');
    }

    public function objections() {
        return $this->hasMany('App\Models\AllocationObjection');
    }

    public
    function getTimes() {
        return $this->get_timeset();
    }

    public
    function allocation_documents() {
        return $this->hasMany('App\Models\AllocationDocument');
    }

    /**
     * @param $allocationType
     * @param $selector
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public
    static function getOwnAllocations($allocationType, $selector, $custom_url, $filters = array(), $perPage = 10) {
        $ret = array();
        switch ($selector) {
            case 'running':
                $ownRunning = Allocation::query()->with(['lots' => function ($q) {
                    $q->with(['unit', 'family']);
                }, 'lots.slices'                                => function ($q) {
                    $q->with(['substances', 'material', 'storagePickup', 'storageDelivery']);
                }]);

                foreach ($filters as $filter => $val) {
                    if ($filter == 'auctionFamiliesFilter') {
                        $ownRunning = $ownRunning->whereIn('family_id', Family::query()->whereIn('name', explode(',', $val))->get(['id'])->pluck('id'));
                    }
                    if ($filter == 'auctionStoragesFilter') {
                        $ownRunning = $ownRunning->whereHas('slices.storagePickup', function ($q) use ($val) {
                            $q->whereIn('storages.name', explode(',', $val));
                        });
//                $own = $own->wherein('storages.name', explode(',', $val));
                    }
                    if ($filter == 'auctionTransportTypeFilter') {
                        $ownRunning = $ownRunning->whereHas('slices', function ($q) use ($val) {
                            $q->where('transport_type', $val);
                        });
                    }
                }

                $ownRunning = $ownRunning->where([
                    ['company_id', '=', Auth::company_id()]])
                    ->whereIn('state',['running', 'paused'])
                    ->orderBy('auction_end', 'ASC')
                    //exclude soft deleted
                    ->whereNull('deleted_at')
                    ->paginate($perPage)//->get()
                    ->withPath($custom_url);

                foreach ($ownRunning as $key => $oa) {
                    /*  $ownRunning[$key]['quantity'] = 0;
                      foreach ($oa->lots as $lot) {
                          $ownRunning[$key]['quantity'] += $lot->slices->sum('quantity');
                      }
    */

//                    $bidding = LotBiddings::select(\DB::raw('max(amount) as amount ,created_at'))
//                        ->where('auction_id', '=', $oa->id)->groupBy('user_id')->orderBy('amount', 'desc')->get(1);
//                    if (!empty($bidding->all())) {
//                        $ownRunning[$key]['top_bidding'] = $bidding->all()[0]->amount;
//                    } else {
//                        $ownRunning[$key]['top_bidding'] = false;
//                    }
//                    $ownRunning[$key]['buyNowPossible'] = Auction::isBuyNowPossible($oa->id);
//

//                    //  $ownRunning[$key]['contaminationLevel'] = $auction->evalContaminations(json_decode($oa->contamination, true));
                }
                return $ownRunning;
                break;
            default:
                $own = Allocation::query()->with(['lots' => function ($q) {
                    $q->with(['unit', 'family', 'slices' => function ($q) {
                        $q->with(['substances', 'material', 'storagePickup', 'storageDelivery']);
                    }]);
                }])
                    //exclude soft deleted
                    ->whereNull('deleted_at')
                    ->where('company_id', Auth::company_id());

                if ($selector !== 'all') {
                    if ($selector == 'new') {
                        $own = $own->whereIn('state', array('new', 'readyForPublish', 'publishInProgress', 'publishError'));
                    } elseif ($selector === 'ended') {
                        $own = $own->whereIn('state', array($selector, 'endedEmpty', 'canceled', 'awarded'));
                    } elseif ($selector === 'first_offer') {
                        $own = $own->whereIn('state', array($selector, 'published'));
                    } elseif ($selector === 'qualification') {
                        $own = $own->whereIn('state', array($selector, 'qualified'));
                    } elseif ($selector === 'running') {
                        $own = $own->whereIn('state', array($selector, 'paused'));
                    } else {
                        $own = $own->where('state', $selector);
                    }
                }

                foreach ($filters as $filter => $val) {
                    if ($filter == 'auctionFamiliesFilter') {
                        $own = $own->whereHas('lots.family', function ($q) use ($val) {
                            $q->whereIn('name', explode(',', $val));
                        });
                    }
                    if ($filter == 'auctionStoragesFilter') {
                        $own = $own->whereHas('lots.slices.storagePickup', function ($q) use ($val) {
                            $q->whereIn('storages.name', explode(',', $val));
                        });
                    }
                    if ($filter == 'auctionTransportTypeFilter') {
                        $own = $own->whereHas('lots.slices', function ($q) use ($val) {
                            $q->where('transport_type', $val);
                        });
                    }
                }

                $own = $own->orderBy('state', 'ASC')
                    ->orderBy('auction_end', 'DESC')->get();
                //$own->paginate($perPage)//->get()
                //->withPath($custom_url);
                foreach ($own as $lot) {
                    switch ($lot->state) {
                        case ('qualified'):
                            $lot->sort_state = 'qualification';
                            break;
                        case ('published'):
                            $lot->sort_state = 'first_offer';
                            break;
                        case ('endedEmpty'):
                            $lot->sort_state = 'ended';
                            break;
                        case ('readyForPublish'):
                        case('publishInProgress'):
                        case('publishError'):
                            $lot->sort_state = 'new';
                            break;
                        case ('awarded'):
                            $lot->sort_state = 'awarded';
                            break;
                        case ('paused'):
                            $lot->sort_state = 'running';
                            break;
                        default:
                            $lot->sort_state = $lot->state;
                            break;
                    }
                }
//                foreach ($own as $key => $oa) {
//                    $bidding = Biddings::select(\DB::raw('max(amount) as amount ,created_at'))->where('auction_id', '=', $oa->id)->groupBy('user_id')->orderBy('amount', 'desc')->get(1);
//                    if (!empty($bidding->all())) {
//                        $own[$key]['top_bidding'] = $bidding->all()[0]->amount;
//                    } else {
//                        $own[$key]['top_bidding'] = false;
//                    }
//                }
                return $own->sortBy('sort_state')->sortByDesc('auction_end')->paginate($perPage);
        }
    }

    public
    function validate(Request $request) {
        $allocation = $this;
        $ret_val = array('has_errors' => false, 'errors' => array());
        $errors = array();
        $exploder = '#####';
        $fail = false;

//Allocation
        $timeset = $this->get_timeset();

        $offerLimitDays = $timeset['tedDelayDays'] + $timeset['offerLimitDays'];
        $offerLimitMinDate = strtotime(' + ' . $offerLimitDays . ' days') + 3000 + 86400;
        if (strtotime($allocation->offer_limit) < $offerLimitMinDate) {
            $error = ['code' => 'company_invalid_offer_limit', 'msg' => trans('allocation.error_offer_limit_violated', ['offerLimit' => date('d.m.Y H:i', $offerLimitMinDate), 'DAYS' => $offerLimitDays]), 'url' => route('alloc.step1', ['allocationName' => $allocation->name])];
            $errors[] = $error;
        }

        if ($this->hasInvalidAllocationVerifications()) {
            $error = ['code' => 'invalid_allocation_verifications', 'msg' => trans('allocation.pleaseUpdateAllocationVerificationsError'), 'url' => route('alloc.step3', ['allocationName' => $this->name])];
            $errors[] = $error;
        }

        //Lots
        $lots = $this->lots;
        if ($lots->isEmpty()) {
            $error = ['code' => 'alloc_no_lots', 'msg' => trans('allocation.no_lots_created'), 'url' => route('alloc.step2', ['allocationName' => $this->name])];
            $errors[] = $error;
        }
        $lots_finalized = true;
        if ($this->legal_base == 'public') {

            try {
                $phonenumber = PhoneNumber::parse($this->contactPerson->phonenumber);
                if (!$phonenumber->isValidNumber()) {
                    $error = ['code' => 'company_invalid_phonenumber_contact_person', 'msg' => trans('allocation.error_phonenumber_contact_person_invalid'), 'url' => route('company.personnel')];
                    $errors[] = $error;
                }
            } catch (\Exception $e) {
                $error = ['code' => 'company_invalid_contact_person', 'msg' => trans('allocation.error_phonenumber_contact_person_invalid'), 'url' => route('company.personnel')];
                $errors[] = $error;
            }
            try {
                $phonenumber = PhoneNumber::parse($this->company->phonenumber);
                if (!$phonenumber->isValidNumber()) {
                    $error = ['code' => 'company_invalid_phonenumber', 'msg' => __('allocation.error_phonenumber_invalid'), 'url' => route('company.profile')];
                    $errors[] = $error;
                }
            } catch (\Exception $e) {
                $error = ['code' => 'company_invalid_phonenumber', 'msg' => trans('allocation.error_phonenumber_invalid'), 'url' => route('company.profile')];
                $errors[] = $error;
            }
            if (!filter_var($this->company->companyURL, FILTER_VALIDATE_URL)) {
                $error = ['code' => 'company_invalid_url', 'msg' => trans('allocation.error_company_url_invalid'), 'url' => route('company.profile')];
                $errors[] = $error;
            }
            if (!in_array($this->company->typeOfContractingAuthority, ['BODY_PUBLIC', 'EU_INSTITUTION', 'MINISTRY', 'NATIONAL_AGENCY', 'REGIONAL_AGENCY', 'REGIONAL_AUTHORITY'])) {
                $error = ['code' => 'alloc_invalid_contracting_authority', 'msg' => trans('allocation.error_contracting_authority_invalid'), 'url' => route('company.profile')];
                $errors[] = $error;
            }
            if (!in_array($this->company->mainActivity, ['GENERAL_PUBLIC_SERVICES', 'DEFENCE', 'PUBLIC_ORDER_AND_SAFETY', 'ENVIRONMENT', 'ECONOMIC_AND_FINANCIAL_AFFAIRS', 'HEALTH', 'HOUSING_AND_COMMUNITY_AMENITIES', 'SOCIAL_PROTECTION', 'RECREATION_CULTURE_AND_RELIGION', 'EDUCATION'])) {
                $error = ['code' => 'company_invalid_main_activity', 'msg' => trans('allocation.error_main_activity_invalid'), 'url' => route('company.profile')];
                $errors[] = $error;
            }
            if (!$this->company->rb_name || !$this->company->rb_city || !$this->company->rb_zipcode) {
                $error = ['code' => 'company_invalid_rb_details', 'msg' => trans('allocation.rb_details_invalid'), 'url' => route('company.profile')];
                $errors[] = $error;
            }

            //check type ['uvgo','eu']
            $allocationTotal = $this->getTotalEstValue();
            $threshold = getConfigValues('eu_threshold_value');
            if ($allocation->type === 'uvgo') {
                if ($allocationTotal > $threshold) {
                    $error = ['code' => 'alloc_no_uvgo', 'msg' => trans('allocation.error_alloc_no_uvgo', ['TOTAL' => number_format($allocationTotal, 2, ',', '.') . "€", 'THRESHOLD' => number_format($threshold, 2, ',', '.') . "€"]), 'url' => route('alloc.step1', ['allocationName' => $allocation->name])];
                    $errors[] = $error;
                }
            }
            if ($allocation->type === 'eu') {
                if ($allocationTotal < $threshold) {
                    $error = ['code' => 'alloc_no_eu', 'msg' => trans('allocation.error_alloc_no_eu', ['TOTAL' => number_format($allocationTotal, 2, ',', '.') . "€", 'THRESHOLD' => number_format($threshold, 2, ',', '.') . "€"]), 'url' => route('alloc.step1', ['allocationName' => $allocation->name])];
                    $errors[] = $error;
                }
            }
        }

        foreach ($lots as $lot) {
            if ($lot->step_by_new < 3) {
                $error = ['code' => 'lot_unfinished', 'msg' => __('allocation.error_lot_unfinished', ['LOT' => $lot->sort_order]), 'url' => route('alloc.lot.details', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name])];
                $errors[] = $error;
            }

            if ($lot->slices->isEmpty()) {
                $error = ['code' => 'lot_no_slices', 'msg' => trans('allocation.error_lot_has_no_slices', ['LOT' => $lot->sort_order]), 'url' => route('alloc.lot.step2', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name])];
                $errors[] = $error;
            }
            if (strtotime($lot->perf_period_start) < strtotime($allocation->binding_limit)) {
                $error = ['code' => 'lot_invalid_perf_period', 'msg' => trans('allocation.error_perf_period_to_early', ['LOT' => $lot->sort_order]), 'url' => route('alloc.lot.step1', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name])];
                $errors[] = $error;
            }
//Slices
            foreach ($lot->slices as $slice) {

                if (!$slice->quantity) {
                    $error = ['code' => 'slice_no_quantity', 'msg' => trans('allocation.error_slice_has_no_quantity', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
                        'url'  => route('alloc.slice.step1', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
                    $errors[] = $error;
                }
                if ($slice->division_as_location && !$slice->division) {
                    $error = ['code' => 'slice_no_division', 'msg' => trans('allocation.error_slice_division_not_selected', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
                        'url'  => route('alloc.slice.step2', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
                    $errors[] = $error;
                }


                if (!$slice->transport_type) {
                    $error = ['code' => 'slice_no_transport_type', 'msg' => trans('allocation.error_slice_has_no_transport_type', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
                        'url'  => route('alloc.slice.step2', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
                    $errors[] = $error;
                }
                if (!$slice->target_price) {
                    $error = ['code' => 'slice_no_target_price', 'msg' => trans('allocation.error_slice_has_no_payment_means', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
                        'url'  => route('alloc.slice.step3', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
                    $errors[] = $error;
                }
                if ($slice->step_by_new != 99) {
                    $error = ['code' => 'slice_unfinished', 'msg' => trans('allocation.error_slice_is_not_finished', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
                        'url'  => route('alloc.slice.step1', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
                    $errors[] = $error;

                }
//              NOT NEEDED :)
//                if ($slice->pickup_date_start && strtotime($slice->pickup_date_start) < strtotime($lot->perf_period_start)) {
//                    $error = ['msg' => trans('allocation.error_pickup_date_to_early', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
//                        'url' => route('alloc.slice.step2', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
//                    $errors[] = $error;
//                }
//                if ($slice->delivery_date_start && strtotime($slice->delivery_date_start) < strtotime($lot->perf_period_start)) {
//                    $error = ['msg' => trans('allocation.error_delivery_date_to_early', ['SLICE' => $slice->material->avvid, 'LOT' => $lot->sort_order]),
//                        'url' => route('alloc.slice.step2', ['allocationName' => $lot->allocation->name, 'lotName' => $lot->name, 'slice_id' => $slice->id])];
//                    $errors[] = $error;
//                }
            }
        }

        foreach ($errors as $step => $errorList) {
            if (!empty($errorList)) {
                $ret_val['has_errors'] = true;
                break;
            }
        }
        $ret_val['errors'] = $errors;

        return $ret_val;
    }

    public
    function participationsByCompany() {
        $this->load(['lots.participations' => function ($q) use (&$participations) {
            $participations = $q->get()->unique()->where('company_id', Auth::company_id());
        }]);

        return $participations;
    }

    public
    static function getRandomAllocations($nature) {
        $where = array();
        //$where[] = array('state', 'first_offer');
        if($nature)
            $where[] = array('nature',$nature);
        $ret_val = Allocation::query()->with(['lots', 'lots.slices'])->where('incognito',0)->where($where);
        //$ret_val = $ret_val->inRandomOrder()->limit(3)->get();
        $ret_val = $ret_val->inRandomOrder()->limit(3)->get();
        return $ret_val->all();
    }


    /**
     * Only for private allocations
     * Checks if all lots are awarded and sends out the report
     *
     */
    public function check_award_completeness() {
        $complete = true;
        foreach ($this->lots as $lot) {
            if (!in_array($lot->state, ['endedEmpty', 'awarded']))
                $complete = false;
        }
        if ($complete) {
            $this->state = 'awarded';
            $this->save();
            if ($this->legal_base == 'private') {
                $this->user->notify(new AllocationAwarded($this));
            }
        }
    }

    public function getTotalEstValue() {
        $totalEstValue = 0;
        foreach ($this->lots as $lot) {
            $totalEstValue += abs($lot->est_value);
        }
        return $totalEstValue;
    }

    public function get_information_documents() {
        $information_documents = new Collection();
        $total_est_value = $this->getTotalEstValue();
        foreach ($this->allocation_information_documents as $information_document) {
            if ($information_document->min_value < $total_est_value) {
                if (($information_document->max_value && $information_document->max_value > $total_est_value) || !$information_document->max_value)
                    $information_documents->push($information_document);
            }
        }
        return $information_documents;
    }

    public function get_report() {
        $filename = trans('allocation.report') . '-' . strtoupper($this->name) . '.pdf';
        $report_filename = 'allocations/' . $this->name . '/' . $filename;
        /* TODO better logic */
        if (!Storage::disk('private')->exists($report_filename) || config('app.debug') || true) {
            $verifications = $this->allocation_verifications()->with(['verification_user_answers','verification_user_answer_lots'])->where('is_active',1)->get();

            if ($this->legal_base == 'private')
                $pdf_view = "pdf." . App::getLocale() . ".report_private";
            else
                $pdf_view = "pdf." . App::getLocale() . ".report";
            if (view()->exists($pdf_view)) {
                $this->zip_state = 'Deutschland';
                $zipcode2state = Geo::query()->where('zipcode', $this->user->zipcode)->first();
                if ($zipcode2state)
                    $this->zip_state = $zipcode2state->state;
                /* @var PDF $pdf */
                $pdf = App::make('dompdf.wrapper');
                $pdf->setOptions(['isHtml5ParserEnabled' => true, "enable_php" => true]);

                $threshold = Controller::getSystemSettings('eu_threshold_value');

                $pdf->loadView($pdf_view, ['allocation' => $this, 'threshold' => $threshold, 'verifications' => $verifications]);;
                // return view($pdf_view, ['allocation' => $this, 'threshold' => $threshold, 'verifications' => $verifications]);
                set_time_limit(100);
                $pdf_content = $pdf->output();
                Storage::disk('private')->put($report_filename, $pdf_content);
                return $pdf_content;
            } else {
                return false;
            }
        } else {
            return Storage::disk('private')->get($report_filename);
        }
    }

    public function get_timeset() {
        $times = getConfigValues(['times' => 'all'], true);
        $timeset = array();
        $actual_time = null;
        if ($this->legal_base == "private")
            $actual_time = "private";
        else {
            $actual_time = $this->type;
        }
        foreach ($times as $time => $values)
            $timeset[$time] = $values[$actual_time];
        return $timeset;
    }

    public function clone() {
        $new_alloc = $this->replicate();

        $new_alloc->name = ToolService::unique_random("allocations", "name", 12);
        $new_alloc->title = $this->title . "_new";

        $new_alloc->reset();

        $new_alloc->save();

        if ($this->documents) {
            foreach ($this->documents as $a_doc) {
                $new_a_doc = $a_doc->clone();
                $new_a_doc->lot_id = $new_alloc->id;
                $new_a_doc->save();
            }
        }

        //replicate lots
        if ($this->lots) {
            foreach ($this->lots as $lot) {
                //replicate each lot
                $new_lot = $lot->clone();
                $new_lot->allocation_id = $new_alloc->id;
                $new_lot->save();

                if ($lot->documents) {
                    foreach ($lot->documents as $l_doc) {
                        $new_l_doc = $l_doc->clone();
                        $new_l_doc->lot_id = $new_lot->id;
                        $new_l_doc->save();
                    }
                }

                if ($lot->cpvcodes) {
                    $new_lot->cpvcodes()->attach($lot->cpvcodes);
                    $new_lot->save();
                }

                //replicate slices
                if ($lot->slices) {
                    foreach ($lot->slices as $slice) {
                        //replicate each slice
                        $new_slice = $slice->clone();
                        $new_slice->lot_id = $new_lot->id;
                        $new_slice->save();

                        if ($slice->documents) {
                            foreach ($slice->documents as $s_doc) {
                                $new_s_doc = $s_doc->clone();
                                $new_s_doc->slice_id = $new_slice->id;
                                $new_s_doc->save();
                            }
                        }

                        $rels = ['colors'/*, 'descents'*/, 'loadingTech', 'shapes', 'substances', 'tradenames', 'deliveryVehicle'];
                        foreach ($rels as $rel) {
                            if ($slice->{$rel}) {
                                $new_slice->{$rel}()->attach($slice->{$rel});
                                $new_slice->save();
                            }
                        }
                    }
                }
            }
        }

        return $new_alloc;
    }

    public function reset() {

        $timeset = $this->accelerateTimeSet($this->get_timeset());

        $this->step_by_new = 2;
        $this->state = 'new';
        $this->planned_start = date("Y-m-d H:i:s", strtotime($timeset['planned_startMinDate']));
        $this->offer_limit = date("Y-m-d H:i:s", strtotime($timeset['offerLimitMinDate']));
        $this->qualification_end = date("Y-m-d H:i:s", strtotime($timeset['qualificationEndMinDate']));
        $this->auction_start = date("Y-m-d H:i:s", strtotime($timeset['auctionStartsAfterMinDate']));
        $this->auction_end = date("Y-m-d H:i:s", strtotime($timeset['auctionRunsDaysMinDate']));
        $this->binding_limit = date("Y-m-d H:i:s", strtotime($timeset['bindinglimitDaysMinDate']));
        $this->qualification_request_deadline = date("Y-m-d H:i:s", strtotime($timeset['qualificationRequestDeadlineMinDate']));
        $this->post_qualification_request_deadline = date("Y-m-d H:i:s", strtotime($timeset['postQualificationRequestDeadlineMinDate']));
        $this->post_qualification_end = date("Y-m-d H:i:s", strtotime($timeset['postQualificationEndMinDate']));
        $this->ted_submission_id = null;
        $this->notice_number_oj = null;
        $this->ted_submission_id_can = null;
        $this->xvergabe_submission_id = null;
        $this->xvergabe_submission_id_can = null;
        $this->cancel_requested = 0;
        $this->deleted_at = null;
        $this->cancel_reason = null;
        $this->cancel_reason_text = null;
        $this->award_notice_sent_at = null;
        $this->canceled_at = null;
        $this->award_information_sent_at = null;
        $this->published_at = null;
        $this->participation_information_sent_at = null;
    }

    public function accelerateTimeSet($timeset) {

        //Veröffentlichung
        $tedDelayDays = $timeset['tedDelayDays'];
        //Angebotsfrist

        $offerLimitDays = $tedDelayDays + $timeset['offerLimitDays'];
        //Zulassungsfrist
        $qualificationRequestDeadlineDays = $offerLimitDays + $timeset['qualificationRequestDeadlineDays'];
        $qualificationEndDays = $qualificationRequestDeadlineDays + $timeset['qualificationVerificationDays'];
        //E-Auktion
        $auctionStartsAfterDays = $qualificationEndDays + $timeset['auctionStartsAfterDays'];
        $auctionRunsDays = $auctionStartsAfterDays + $timeset['auctionRunsDays'];
        //Zuschlagsprüfung
        $postQualificationRequestDeadlineDays = $auctionRunsDays + $timeset['postQualificationRequestDeadlineDays'];
        $postQualificationEndDays = $postQualificationRequestDeadlineDays + $timeset['postQualificationVerificationDays'];
        //Zuschlag
        $bindingLimitDaysDefault = $postQualificationEndDays + $timeset['bindingLimitDays'];

        //Angebotsfrist
        $timeset['planned_startMinDate'] = date('Y-m-d H:i', time() + 3600);

        $timeset['offerLimitMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $offerLimitDays . ' days') + 86400 + 3600);

        //Zulassungsfrist
        $timeset['qualificationRequestDeadlineMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $qualificationRequestDeadlineDays . ' days') + 86400 + 3600);
        $timeset['qualificationEndMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $qualificationEndDays . ' days') + 86400 + 3600);

        //E-Auktion
        $timeset['auctionStartsAfterMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $auctionStartsAfterDays . ' days') + 86400 + 3600);
        $timeset['auctionRunsDaysMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $auctionRunsDays . ' days') + 86400 + 3600);

        //Zuschlagsprüfung
        $timeset['postQualificationRequestDeadlineMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $postQualificationRequestDeadlineDays . ' days') + 86400 + 3600);
        $timeset['postQualificationEndMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $postQualificationEndDays . ' days') + 86400 + 3600);

        //Zuschlag
        $timeset['bindinglimitDaysMinDate'] = date('Y-m-d H:i', strtotime(' + ' . $bindingLimitDaysDefault . ' days') + 86400 + 86400 + 3600);

        return $timeset;
    }

    public function getSubcontractorAvs() {
        return AllocationVerification::where([['allocation_id', $this->id], ['is_active', 1], ['for_subcontractor', 1], ['category', '!=', 'price']])->get();
    }

    public function excel_export() {

    }

    public function revalidateAllocationVerifications() {
        $avs = AllocationVerification::where([['allocation_id', $this->id], ['is_editable', 1], ['is_lot_specific', 1], ['is_active', 1]])->get();
        foreach ($avs as $av) {
            $av->invalid = 1;
            $av->save();
        }
    }

    public function hasInvalidAllocationVerifications() {
        return $this->getInvalidAllocationVerifications()->count();
    }

    public function getInvalidAllocationVerifications() {
        return $this->allocation_verifications->where('invalid', 1);
    }

    public function clear_contract_documents() {
        $files = [];
        foreach (['de', 'en'] as $local) {
            $files[] = '/private/allocations/' . $this->name . '/bid_terms-' . $this->name . '_' . $local . '.pdf';
            $files[] = '/private/allocations/' . $this->name . '/contract_terms-' . $this->name . '_' . $local . '.pdf';
            $files[] = '/private/allocations/' . $this->name . '/specs_sheet-' . $this->name . '_internal' . '_' . $local . '.pdf';
            $files[] = '/private/allocations/' . $this->name . '/specs_sheet-' . $this->name . '_' . $local . '.pdf';
        }
        foreach ($files as $file) {
            if (file_exists(storage_path('app/' . $file))) {
                unlink(storage_path('app/' . $file));
            }
        }
    }
}

