<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Setting\Note
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $value
 * @property int $entity_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Note whereValue($value)
 * @mixin \Eloquent
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
