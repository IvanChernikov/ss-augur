<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Seekable;

class Tome extends Model
{
    use Seekable;

    protected $fillable = [
        'title'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany(Record::class);
    }

    /**
     * @return string
     */
    protected function getReferenceAttribute()
    {
        return 'title';
    }
}
