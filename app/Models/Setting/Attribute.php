<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Setting\Attribute
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $data_type
 * @property int $entity_type_id
 * @property-read \App\Models\Setting\EntityType $entityType
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereDataType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereEntityTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Attribute extends Model
{
    const TYPE_STRING = 'string';
    const TYPE_INTEGER = 'integer';
    const TYPE_DATE = 'date';
    const TYPE_JSON = 'json';
    const TYPE_ENTITY = 'entity';

    protected $fillable = [
        'name', 'data_type'
    ];

    public function entityType() {
        return $this->belongsTo(EntityType::class);
    }

}
