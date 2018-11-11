<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Owned;
use App\Models\Auth\User;

/**
 * Class Universe
 * @package App\Models\Setting
 * @property integer $id
 * @property string $name
 * @property string $description
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
