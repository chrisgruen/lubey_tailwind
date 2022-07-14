<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Settings;
use App\Models\Company;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public static function getSystemSettings($setting) {
        $settings = new Settings();
        $data = $settings->where('setting', $setting)->get()->first();
        if (empty($data)) {
            return null;
        } else {
            $data = $data->toArray();
            return $data['setting_value'];
        }
    }
    
    public static function unique_uuid($table) {
        $unique = false;
        $tested = [];
        do {
            $random = Str::uuid();
            if (in_array($random, $tested)) {
                continue;
            }
            $count = \DB::table($table)->where('uuid', $random)->count();
            $tested[] = $random;
            if ($count == 0) {
                // Set unique to true to break the loop
                $unique = true;
            }
        } while (!$unique);
        return $random;
    }
    
    function randomReadbleKey($length) {
        $alphabet = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
