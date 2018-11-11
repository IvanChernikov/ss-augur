<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Owned;
use App\Models\Auth\User;

/**
 * App\Models\Setting\Universe
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property int $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Entity[] $entities
 * @property-read \App\Models\Auth\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe byUser(\App\Models\Auth\User $user)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe owned()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting\Universe whereUserId($value)
 * @mixin \Eloquent
 */
class Universe extends Model
{
    use Owned;

    protected $fillable = [
        'name', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
