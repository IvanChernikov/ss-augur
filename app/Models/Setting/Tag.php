<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\Owned;

class Tag extends Model
{
    use Owned;

    protected $fillable = [
        'value'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
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
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithValue($query, $value) {
        return $query->where('value', $value);
    }
}
