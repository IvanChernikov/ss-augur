<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * @package App\Models\Setting
 * @property integer $id
 * @property string $value
 * @property integer $entity_id
 * @property Entity $entity
 */
class Note extends Model
{
    protected $fillable = [
        'value'
    ];

    public function entity()
    {
        $this->belongsTo(Entity::class);
    }
}
