<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model {

    public function news() {
        return $this->hasMany('App\Models\News');
    }

    public function desktop_img() {
        return $this->belongsTo('App\Models\NewsDocument', 'file_id_desktop');
    }

    public function mobile_img() {
        return $this->belongsTo('App\Models\NewsDocument', 'file_id_mobile');
    }

    public function getNameAttribute($value) {
        if (app::getLocale() == 'en')
            return $this->name_en;
        else
            return $value;
    }

}
