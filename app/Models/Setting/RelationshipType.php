<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RelationshipType
 * @package App\Models\Setting
 * @property integer $id
 * @property string $name
 * @property string parent_verb
 * @property string child_verb
 * @property integer parent_entity_type_id
 * @property integer child_entity_type_id
 * @property EntityType parentType
 * @property EntityType childType
 */
class RelationshipType extends Model
{
    protected $fillable = [
        'name', 'parent_verb', 'child_verb'
    ];

    public function setParentVerbAttribute($value)
    {
        $this->parent_verb = strtolower($value);
    }

    public function setChildVerbAttribute($value)
    {
        $this->child_verb = strtolower($value);
    }

    public function parentType()
    {
        return $this->belongsTo(EntityType::class, 'parent_entity_type_id');
    }

    public function childType()
    {
        return $this->belongsTo(EntityType::class, 'child_entity_type_id');
    }
}
