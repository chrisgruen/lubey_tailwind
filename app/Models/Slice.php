<?php

namespace App\Models;

use App\Geo;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\Loggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;

class Slice extends Model {
    use SoftDeletes;

    protected $table = 'slices';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $casts = [
        'loading_times' => 'array',
    ];


    public static function boot() {
        parent::boot();

        static::deleting(function (Slice $slice) { // before delete() method call this
            Log::info('deleteing Documents from Slice');
            $slice->documents->each(function ($document) {
                $document->delete();
            });
            $slice->shapes()->detach();
            $slice->colors()->detach();
            $slice->substances()->detach();
            $slice->tradenames()->detach();
        });

        static::deleted(function (Slice $slice) {
            $slice->lot->finalize();
        });

        static::bootSoftDeletes();
    }

    public function getModelName() {
        return $this->id . " of Lot " . $this->lot_id;
    }

    public function lot() {
        return $this->belongsTo('Alloc\Lot');
    }

    public function material() {
        return $this->belongsTo('App\Models\Material');
    }

    public function tradenames() {
        return $this->belongsToMany('App\Tradename');
    }

    public function descentGroup() {
        return $this->belongsTo('App\Descent', 'descent_id_1st_lvl');
    }

    public function descentOne() {
        return $this->belongsTo('App\Descent', 'descent_id_2nd_lvl');
    }

    public function descentTwo() {
        return $this->belongsTo('App\Descent', 'descent_id_3rd_lvl');
    }


    public function shapes() {
        return $this->belongsToMany('App\Shape', 'slice_shape');
    }

    public function documents() {
        return $this->hasMany('Alloc\SliceDocument');
    }

    public function origin() {
        return $this->belongsTo('App\Origin');
    }

    public function division() {
        return $this->belongsTo('App\Division');
    }

    public function descents() {
        return $this->hasMany('App\Descent');
    }

    public function substanceGroup() {
        return $this->belongsTo('App\Nodels\Substance', 'substance_group_id');
    }

    public function substances() {
        return $this->belongsToMany('App\Models\Substance');
    }

    public function colors() {
        return $this->belongsToMany('App\Color', 'slice_color');
    }

    public function storagePickup() {
        return $this->belongsTo('App\Storage', 'storage_id_pickup');
    }

    public function storageDelivery() {
        return $this->belongsTo('App\Storage', 'storage_id_delivery');
    }


    public function loadingTech() {
        return $this->belongsToMany('App\LoadingTech', 'slice_loading_tech');
    }

    public function getLoadingTimesAttribute($value) {

        return json_decode($value, true);
    }

    public function setLoadingTimesAttribute($value) {
        if (!is_null($value))
            $value = json_encode($value);

        $this->attributes['loading_times'] = $value;
    }

    public function deliveryVehicles() {
        return $this->belongsToMany('App\Vehicle', 'slice_vehicle');
    }

    public function federation_member() {
        return $this->belongsTo('App\Models\Company', 'federation_member_id');
    }

    public function update_coordinates() {
        if ($this->division_as_location) {
            $this->zip_code = $this->division->zipcode;
        }
        $target = Geo::query()->where('zipCode', '=', $this->zip_code)->first();
        if (empty($target)) {
            return;
        }
        $this->latitude = $target->latitude;
        $this->longitude = $target->longitude;
    }

    public function clone() {
        $new_slice = $this->replicate();
        $new_slice->reset();

        return $new_slice;
    }

    public function reset() {
        $this->lubey_connect_id = null;
    }
}

