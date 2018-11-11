<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Value
 * @package App\Models\Setting
 * @property integer $id
 * @property mixed $data
 * @property integer $attribute_id
 * @property integer $entity_id
 * @property Attribute $attribute
 * @property Entity $entity
 */
class Value extends Model
{
    protected $fillable = [
        'data'
    ];

    /**
     *
     */
    public function getDataAttribute()
    {
        return $this->convertToType();
    }

    /**
     * @param mixed $value
     */
    public function setDataAttribute($value)
    {
        $this->convertFromType($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }


    private function convertToType()
    {

    }

    private function convertFromType($value)
    {

    }
}
