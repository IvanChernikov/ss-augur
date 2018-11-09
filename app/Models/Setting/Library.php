<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\Owned;

class Library extends Model
{
    use Owned;

    protected $fillable = [
        'title'
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
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

}
