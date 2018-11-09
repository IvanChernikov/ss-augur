<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Seekable;

/**
 * Class Section
 * @package App\Models\Setting
 */
class Section extends Model
{
    use Seekable;

    public $fillable = [
        'title'
    ];

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

    /**
     * @return string
     */
    protected function getReferenceAttribute()
    {
        return 'title';
    }
}
