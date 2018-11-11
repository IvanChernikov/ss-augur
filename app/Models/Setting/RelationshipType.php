<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Setting\RelationshipType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $parent_verb
 * @property string $child_verb
 * @property int $parent_entity_type_id
 * @property int $child_entity_type_id
 * @property-read \App\Models\Setting\EntityType $childType
 * @property-read \App\Models\Setting\EntityType $parentType
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereChildEntityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereChildVerb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereParentEntityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereParentVerb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RelationshipType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RelationshipType extends Model
{
    protected $fillable = [
        'name', 'parent_verb', 'child_verb'
    ];

    /**
     * @param string $value
     */
    public function setParentVerbAttribute($value)
    {
        $this->parent_verb = strtolower($value);
    }

    /**
     * @param string $value
     */
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
