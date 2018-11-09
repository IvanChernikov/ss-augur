<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tome()
    {
        return $this->belongsTo(Tome::class);
    }
}
