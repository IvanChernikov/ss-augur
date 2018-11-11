<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Setting\Tag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $value
 * @property int $entity_id
 * @property-read \App\Models\Setting\Entity $entity
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Tag whereValue($value)
 * @mixin \Eloquent
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
