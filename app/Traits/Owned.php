<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2018-11-08
 * Time: 10:31 PM
 */

namespace App\Traits;

use App\Models\User;

/**
 * Trait Owned
 * @package App\Traits
 * @property User $user
 */
trait Owned
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    abstract public function user();

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    final public function scopeOwned($query)
    {
        return $query->where('user_id', auth()->id());
    }
}