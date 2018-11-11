<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Models\Setting\Value
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|integer|\Carbon|\StdClass|\Entity $data
 * @property int $attribute_id
 * @property int $entity_id
 * @property-read \App\Models\Setting\Attribute $attribute
 * @property-read \App\Models\Setting\Entity $entity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Value whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Value extends Model
{
    protected $fillable = [
        'data'
    ];

    /**
     * @return string|integer|Carbon|\StdClass|Entity
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
        switch ($this->attribute->data_type) {
            case Attribute::TYPE_STRING:
                return (string) $this->data;
            case Attribute::TYPE_INTEGER:
                return (integer) $this->data;
            case Attribute::TYPE_DATE:
                return Carbon::parse($this->data);
            case Attribute::TYPE_JSON:
                return json_decode($this->data);
            case Attribute::TYPE_ENTITY:
                return Entity::find($this->data);
        }
    }

    /**
     * @param mixed|Model $value
     */
    private function convertFromType($value)
    {
        switch ($this->attribute->data_type) {
            case Attribute::TYPE_STRING:
                $this->data = (string) $value;
                break;
            case Attribute::TYPE_INTEGER:
                $this->data = (integer) $value;
                break;
            case Attribute::TYPE_DATE:
                $this->data = Carbon::parse($value)->toDateString();
                break;
            case Attribute::TYPE_JSON:
                $this->data = json_encode($this->data);
                break;
            case Attribute::TYPE_ENTITY:
                /** @var Entity $value */
                $this->data = $value->id;
                break;
        }
    }
}
