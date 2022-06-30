<?php

namespace App\Models;

use App;
use App\Models\Family;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
//use Kalnoy\Nestedset\NodeTrait;

class Material extends Model {
    //use NodeTrait;

    protected $fillable = [
        'name', 'avvid', 'is_enabled', 'showavvid', 'hazardous', 'familyID_redirectTo', 'special', 'type', 'parent_id'
    ];

    public function getNameAttribute($value) {
        if (App::getLocale() == 'en')
            return $this->name_en;
        else
            return $value;
    }

    public function families() {
        return $this->belongsToMany('App\Family', 'family_material');
    }

    static function getAvvsByFamily($family_id) {
        $family = Family::find($family_id);
        $parent_ids = array();
        $groupedMaterials = array();
        $retval = new Collection();
        foreach ($family->materials()->orderBy('_lft', 'ASC')->get() as $material) {
            if (!array_key_exists($material->parent_id, $groupedMaterials))
                $groupedMaterials[$material->parent_id] = array();
            $groupedMaterials[$material->parent_id][] = $material;
            if (!in_array($material->parent_id, $parent_ids))
                $parent_ids[] = $material->parent_id;
        }
        $level1 = array();
        $level2 = array();
        $tree = array();
        foreach ($parent_ids as $parent_id) {
            $ancestor = Material::ancestorsOf($parent_id);
            // dump($ancestor[1]->id,$ancestor[2]->id);
            if (!array_key_exists($ancestor[1]->id, $tree))
                $tree[$ancestor[1]->id] = $ancestor[1];
            if (!array_key_exists($ancestor[2]->id, $tree))
                $tree[$ancestor[2]->id] = $ancestor[2];
            if (!array_key_exists($ancestor[1]->id, $level1))
                $level1[$ancestor[1]->id] = array();
            if (!in_array($ancestor[2]->id, $level1[$ancestor[1]->id]))
                $level1[$ancestor[1]->id][] = $ancestor[2]->id;

            if (!array_key_exists($ancestor[2]->id, $level2))
                $level2[$ancestor[2]->id] = array();
            if (!in_array($parent_id, $level2[$ancestor[2]->id]))
                $level2[$ancestor[2]->id][] = $parent_id;
        }

        foreach ($level1 as $level1_id => $level2IDs) {
            $retval[] = (object)array('name' => $tree[$level1_id]->name, 'id' => null, 'special' => "class='service-option' disabled", 'items' => array());
            foreach ($level2IDs as $level2id) {
                if ($tree[$level2id]->showavvid) {
                    $entry = (object)array('name' => str_pad($tree[$level2id]->avvid, 10, " &nbsp; ") . "  " . $tree[$level2id]->name, 'id' => null, 'items' => array());
                } else {
                    $entry = (object)array('name' => $tree[$level2id]->name, 'id' => null, 'items' => array());
                }
                foreach ($level2[$level2id] as $level3Id) {
                    foreach ($groupedMaterials[$level3Id] as $material) {
                        if ($material->showavvid) {
                            $item = (object)array('id' => $material->id, 'name' => str_pad($material->avvid, 10, "  ") . "  " . $material->name);
                        } else {
                            $item = (object)array('id' => $material->id, 'name' => $material->name);
                        }
                        $entry->items[] = $item;
                    }
                }
                $retval[] = $entry;
            }
        }
        return $retval;
    }
}

