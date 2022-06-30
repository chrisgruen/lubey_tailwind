<?php

namespace App\Helpers;


class Helper
{

    /**
     * TEST Helper
     */
    public static function helper_test()
    {
        return 'hallo helper';
    }

    public static function getFamilyImg($family_name)
    {
        switch($family_name) {
            case('oldWood'):
                $img = 'img/frontend/Altholz.png';
                break;
            case('wastePlastic'):
                $img = 'img/frontend/Kunststoffe.png';
                break;
            case('wasteOil'):
                $img = 'img/frontend/Altoel.png';
                break;
            case('paperPPK'):
                $img = 'img/frontend/Altpapier.png';
                break;
            case('steelAndMetalWaste'):
                $img = 'img/frontend/Schrotte.png';
                break;
            case('textiles'):
                $img = 'img/frontend/Alttextilien.png';
                break;
            default:
                $img = 'img/frontend/Container.png';
        }

        return $img;
    }
}
