<?php

namespace App\Models;

use App;
use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
//use Kalnoy\Nestedset\NodeTrait;
//use PhpParser\Node\Expr\Cast\Object_;


class Substance extends Model {
    //use NodeTrait;

    protected $orderColumn = 'name';
    protected $fillable = [
        'name', 'family_id', 'material_id', 'is_enabled'
    ];

    public function getNameAttribute($value) {
        if (App::getLocale() == 'en')
            return $this->name_en;
        else
            return $value;
    }

    public function tradenames() {
        return $this->belongsToMany('App\Tradename', 'substance_tradename');
    }

    /**
     * Stoffe zu einer Familie
     *
     * @param $familiyID
     * @param null $selected_substance_id
     * @return bool|string
     */
    public static function getSubstanceByFamily($familiyID, $materialID = null, $selected_substance_ids = array()) {

        if ($materialID) {
            $showByMaterial = Substance::getSubstanceByMaterial($materialID, $selected_substance_ids);
            if ($showByMaterial) {
                return $showByMaterial->sortBy('name');
            }
        }
        $parent = Substance::where('family_id', '=', $familiyID)->where('is_enabled', 1)->get()->first();
        if (!$parent) {
            return false;
        }
        $substance = Substance::descendantsOf($parent->id)->where('is_enabled', 1)->toTree($parent->id);
        if (!$substance) {
            return false;
        }

        $retval = false;
        foreach ($substance->sortBy('name') as $oneItem) {
            $retval .= "<optgroup label='" . $oneItem->name . "'>\n";
            foreach ($oneItem->children->sortBy('name') as $twoItem) {
                $retval .= "<option value='$twoItem->id' ";
                if (!empty($oneItem->info))
                    $retval .= " title='" . $oneItem->info . "' ";
                if (!empty($selected_substance_ids) && in_array($twoItem->id, $selected_substance_ids)) {
                    $retval .= " selected ";
                }
                $retval .= ">" . Helper::shorten($twoItem->name, 70) . "</option>\n";
            }
            $retval .= "</optgroup>\n";
        }
        return $retval;
    }


    /**
     * Stoffe zu einer gewählten Stoffgruppe
     *
     * @param $familiyID
     * @return mixed
     */
    public static function getSubstanceForGroup($parentID, $selected_substance_ids = array()) {

        $substance = Substance::descendantsOf($parentID)->where('is_enabled', 1)->toTree($parentID)->sortBy('name');
        if (!$substance) {
            return false;
        }
        $retval = '';
        // $retval = '<option value="">' . trans('messages.pleaseChoose') . '</option>';
        foreach ($substance as $oneItem) {
            $retval .= "<option value='$oneItem->id' ";
            if (!empty($oneItem->info))
                $retval .= " title='" . $oneItem->info . "' ";
            if ($selected_substance_ids != null && in_array($oneItem->id, $selected_substance_ids)) {
                $retval .= " selected ";
            }
            $retval .= ">" . Helper::shorten($oneItem->name, 70) . "</option>\n";
        }
        return $retval;
    }

    /**
     * Stoffe zu einer gewählten Stoffgruppe
     *
     * @param $familiyID
     * @return mixed
     */
    public static function getSubstanceForGroup2($parentID) {
        $retval = new Collection();
        $substance = Substance::descendantsOf($parentID)->where('is_enabled', 1)->toTree($parentID)->sortBy('name');
        if (!$substance) {
            return false;
        }
        foreach ($substance as $oneItem) {
            $entry = array('id' => $oneItem->id, 'name' => $oneItem->name);
            $retval[] = (object)$entry;
        }
        return $retval;
    }


    /**
     * Gruppen der Stoffe zu Familie
     *
     * @param $familiyID
     * @return mixed
     */
    public static function getSubstanceGroupsByFamily($familiyID, $selected_substancegroup_id = null) {
        $parent = Substance::where('family_id', '=', $familiyID)->where('is_enabled', 1)->get()->first();
        if (!$parent) {
            return false;
        }
        $substance = Substance::descendantsOf($parent->id)->where('is_enabled', 1)->toTree($parent->id);
        if (!$substance) {
            return false;
        }
        $retval = false;
        foreach ($substance as $oneItem) {
            $retval .= "<option value='$oneItem->id' ";
            if ($selected_substancegroup_id != null && $selected_substancegroup_id == $oneItem->id) {
                $retval .= " selected ";
            }
            $retval .= ">" . $oneItem->name . "</option>\n";
        }
        return $retval;
    }

    /**
     * Gruppen der Stoffe zu Familie
     *
     * @param $familiyID
     * @return mixed
     */
    public static function getSubstanceGroupsByFamily2($familiyID, $selected_substancegroup_id = null) {
        $parent = Substance::where('family_id', '=', $familiyID)->where('is_enabled', 1)->get()->first();
        if (!$parent) {
            return false;
        }
        $substance = Substance::descendantsOf($parent->id)->where('is_enabled', 1)->toTree($parent->id)->sortBy('name');
        if (!$substance) {
            return false;
        }
        return $substance;
    }

    /**
     * Stoffe zu einer MaterialID
     *
     * @param $materialID
     * @param null $selected_substance_id
     * @return bool|string
     */
    private static function getSubstanceByMaterial($materialID, $selected_substance_ids = array()) {
        $retval = false;
        $parent = Substance::where('material_id', '=', $materialID)->where('is_enabled', 1)->get();

        foreach ($parent as $oneItem) {
            $retval .= "<optgroup label='" . $oneItem->name . "'>\n";
            $substance = Substance::descendantsOf($oneItem->id)->where('is_enabled', 1)->toTree($oneItem->id)->sortBy('name');
            foreach ($substance as $twoItem) {
                $retval .= "<option value='$twoItem->id' ";
                if (!empty($selected_substance_ids) && in_array($twoItem->id, $selected_substance_ids)) {
                    $retval .= " selected ";
                }
                $retval .= ">" . $twoItem->name . "</option>\n";
            }
            $retval .= "</optgroup>\n";
        }

        return $retval;
    }

    /**
     * Stoffe zu einer Familie
     *
     * @param $familyID
     * @param $materialID
     * @return bool|array
     */
    public static function getSubstanceByFamily2($familyID, $materialID = null) {
        $retval = array();
        if ($materialID) {
            $materialSubstances = Substance::getSubstanceByMaterial2($materialID);
            if ($materialSubstances) {
                return $materialSubstances;
            }
        }
        $parent = Substance::where('family_id', '=', $familyID)->where('is_enabled', 1)->get()->first();
        if (!$parent) {
            return false;
        }
        $substance = Substance::descendantsOf($parent->id)->where('is_enabled', 1)->toTree($parent->id);
        if (!$substance) {
            return false;
        }
        foreach ($substance as $oneItem) {
            $entry = array('id' => $oneItem->id, 'name' => $oneItem->name, $items = array());
            foreach ($oneItem->children as $twoItem) {
                $subEntry = array("id" => $twoItem->id, 'name' => $twoItem->name);
                $entry['items'][] = $subEntry;
            }
            $retval[] = $entry;
        }
        return $retval;
    }

    /**
     * Stoffe zu einer MaterialID
     *
     * @param $materialID
     *
     * @return array
     */
    private static function getSubstanceByMaterial2($materialID) {
        $retval = array();
        $parent = Substance::where('material_id', '=', $materialID)->where('is_enabled', 1)->get();
        foreach ($parent as $oneItem) {
            $entry = array('id' => $oneItem->id, 'name' => $oneItem->name, $items = array());
            $substance = Substance::descendantsOf($oneItem->id)->where('is_enabled', 1)->toTree($oneItem->id);
            foreach ($substance as $twoItem) {
                $subEntry = array("id" => $twoItem->id, 'name' => $twoItem->name);
                $entry['items'][] = $subEntry;
            }
            $retval[] = $entry;
        }
        return $retval;
    }
}

