<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tomes()
    {
        return $this->hasMany(Tome::class);
    }
}
