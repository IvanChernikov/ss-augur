<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Setting\Relationship
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $parent_entity_id
 * @property int $child_entity_id
 * @property int $relationship_type_id
 * @property-read \App\Models\Setting\Entity $child
 * @property-read \App\Models\Setting\Entity $parent
 * @property-read \App\Models\Setting\RelationshipType $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereChildEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereParentEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereRelationshipTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Relationship whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Relationship extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Entity::class, 'parent_entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function child()
    {
        return $this->belongsTo(Entity::class, 'child_entity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(RelationshipType::class, 'relationship_type_id');
    }
}
