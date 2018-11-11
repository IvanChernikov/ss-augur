<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Relationship
 * @package App\Models\Setting
 * @property integer $id
 * @property integer $parent_entity_id
 * @property integer $child_entity_id
 * @property integer $relationship_type_id
 * @property Entity $parent
 * @property Entity $child
 * @property RelationshipType $type
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
