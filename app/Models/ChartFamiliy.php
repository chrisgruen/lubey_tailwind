<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Kalnoy\Nestedset\NodeTrait;

class ChartFamiliy extends Model
{
    use NodeTrait;
    protected $table ="chart_families";
    protected $orderColumn = 'name';
    protected $fillable = ['name' ];
    /**
     * Elternelement ID holen
     */
    public static function getDescentGroupID($id) {
        $parentID = Descent::find($id);
        return $parentID->parent_id;
    }
    /**
     * Liste erste Ebene Ursprung/Herkunft zu einer Familie
     *
     * @param $familiyID
     * @param null $selected_descent_id
     * @return bool|string
     */
    public static function getDescentFirst($familiyID, $selected_descent_id=null)
    {
        $retval = '';
        $descentFirst = Descent::query()->where('family_id', '=', $familiyID)->where('is_enabled', 1)->get();
        if ($descentFirst->isEmpty()) {
            return $retval;
        }

        foreach ($descentFirst->sortBy('name') as $oneItem) {
            $retval .= "<optgroup label='" . $oneItem->name . "'>\n";
            $retval .= self::getDescentNext($oneItem->id, $selected_descent_id, true);
            $retval .= "</optgroup>\n";
        }
        return $retval;
    }
    /**
     * Liste erste/zweite Ebene Ursprung/Herkunft zu einer Familie
     *
     * @param $familiyID
     * @return bool|array
     */
    public static function getDescentGroups($familiyID)
    {

        $retval = new Collection();
        $descentFirst = Descent::query()->where('family_id', '=', $familiyID)->where('is_enabled', 1)->get();
        if ($descentFirst->isEmpty()) {
            return $retval;
        }
        foreach ($descentFirst as $oneItem) {
            $entry = array('id' => $oneItem->id, 'name' => $oneItem->name, 'items' => self::getDescentSibbling($oneItem->id));
            $retval->push((Object) $entry);
        }
        return $retval->sortBy('name');
    }

    /**
     * Liste nächste Ebene Ursprung/Herkunft zu einer Familie
     *
     * @param $descent_id_before
     * @param null $selected_id
     * @return bool|string
     */
    public static function getDescentNext($descent_id_before, $selected_id=null, $toGroup=false) {
        $retval = '';
        $descent = Descent::descendantsOf($descent_id_before)->where('is_enabled', 1)->toTree($descent_id_before);
        if ($descent->isEmpty()) {
            return $retval;
        }
        if ($toGroup) {
            $retval = '';
        } else {
            $retval = '<option value="">'.trans('messages.pleaseChoose').'</option>';
        }

        foreach ($descent->sortBy('name') as $oneItem) {
            $retval .= "<option value='$oneItem->id' ";
            if ($selected_id != null && $selected_id == $oneItem->id) {
                $retval .= " selected ";
            }
            $retval .= ">" . $oneItem->name . "</option>\n";
        }
        return $retval;
    }
    /**
     * Liste nächste Ebene Ursprung/Herkunft zu einer Familie
     *
     * @param $descent_id_before
     * @param null $selected_id
     * @return bool|array()
     */
    public static function getDescentSibbling($descent_id_parent) {
        $retval = new Collection();
        $descent = Descent::descendantsOf($descent_id_parent)->where('is_enabled', 1)->toTree($descent_id_parent)->sortBy('name');
        if ($descent->isEmpty()) {
            return $retval;
        }

        foreach ($descent as $oneItem) {
            $entry = array('id' => $oneItem->id, 'name' => $oneItem->name);
            $retval[] = (Object)$entry;
        }

        return $retval;
    }
}
