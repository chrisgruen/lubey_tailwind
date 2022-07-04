<?php

namespace App\Models;

use App;
use Illuminate\Database\Eloquent\Model;

class News extends Model {
    //
    public function category() {
        return $this->belongsTo('App\Models\NewsCategory','news_category_id');
    }

    public function desktop_img() {
        return $this->belongsTo('App\Models\NewsDocument');
    }

    public function mobile_img() {
        return $this->belongsTo('App\Models\NewsDocument');
    }
    public function getHeadlineAttribute($value) {
        if (app::getLocale() == 'en')
            return $this->headline_en;
        else
            return $value;
    }
    public function getTeaserAttribute($value) {
        if (app::getLocale() == 'en')
            return $this->teaser_en;
        else
            return $value;
    }
    public function getBodyAttribute($value) {
        if (app::getLocale() == 'en')
            return $this->body_en;
        else
            return $value;
    }
}
