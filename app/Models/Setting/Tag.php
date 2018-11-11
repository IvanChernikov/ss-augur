<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App\Models\Setting
 * @property integer $id
 * @property string $value
 * @property integer $entity_id
 * @property Entity $entity
 */
class Tag extends Model
{
    protected $fillable = [
        'value'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
