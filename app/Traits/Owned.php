<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 2018-11-08
 * Time: 10:31 PM
 */

namespace App\Traits;

use App\Models\Auth\User;

/**
 * Trait Owned
 * @package App\Traits
 * @property integer $user_id
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

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param User $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    final public function scopeByUser($query, User $user)
    {
        return $query->where('user_id', $user->id);
    }
}