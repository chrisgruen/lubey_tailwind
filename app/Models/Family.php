<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

    protected $fillable = [
        'name', 'active'
    ];

    public $allFields = ["contamination","tradeSolution","origin","color","humidity","shape","granularity","substancegroup","substance","descent","tradename","storage",'eluatSolid','compacted','familySpecificProperties','loadingTech','vehicle'];
    public static $relation_list = array('colors','shapes','storages','units','origins','loading_techs','vehicles','allocation_units'=>['classname'=>'units']);
    protected $table = 'families';

    public function colors() {
        return $this->belongsToMany('App\Color','family_color');
    }

    public function units() {
        return $this->belongsToMany('App\Unit','family_unit');
    }

    public function allocation_units() {
        return $this->belongsToMany('App\Unit','family_allocation_unit');
    }

    public function vehicles() {
        return $this->belongsToMany('App\Vehicle','family_vehicle');
    }

    public function shapes() {
        return $this->belongsToMany('App\Shape','family_shape');
    }

    public function origin() {
        return $this->belongsToMany('App\Origin','family_origin');
    }

    public function loading_techs() {
        return $this->belongsToMany('App\LoadingTech','family_loading_tech');
    }

    //is the same as the above method but it's named with respect to the general naming conventions
    //the previous method needs to be removed in the future sometime
    public function origins() {
        return $this->belongsToMany('App\Origin','family_origin');
    }

    public function storage() {
        return $this->belongsToMany('App\Storage','family_storage');
    }

    //is the same as the above method but it's named with respect to the general naming conventions
    //the previous method needs to be removed in the future sometime
    public function storages() {
        return $this->belongsToMany('App\Storage','family_storage');
    }

    public function materials() {
        return $this->belongsToMany('App\Models\Material','family_material');
    }

    public function tradenames() {
        return $this->belongsToMany('App\Tradename','family_tradename');
    }
    public function descents() {
        return $this->hasMany('App\Descent');
    }
    public function substanceGroups() {
        return $this->hasMany('App\Models\Substance');
    }
    public function indices() {
        return $this->hasMany('Alloc\Index');
    }
}

