<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tag extends Model
{
    protected $fillable = [
        'value'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function records()
    {
        return $this->belongsToMany(Record::class);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOwned($query)
    {
        return $query->where('user_id', auth()->id());
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithValue($query, $value) {
        return $query->where('value', $value);
    }
}
