<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use \App\Traits\Seekable;

/**
 * Class Record
 * @package App\Models\Setting
 * @property string $title
 * @property string $type
 * @property string $text
 * @property Tome $tome
 */
class Record extends Model
{
    use Seekable;

    public const TYPE_DENIZEN = 'denizen';
    public const TYPE_FACTION = 'faction';
    public const TYPE_LANDMARK = 'landmark';
    public const TYPE_LOCATION = 'location';
    public const TYPE_BUILDING = 'building';
    public const TYPE_SETTLEMENT = 'settlement';
    public const TYPE_REGION = 'region';
    public const TYPE_COUNTRY = 'country';
    public const TYPE_DEITY = 'deity';
    public const TYPE_ARTIFACT = 'artifact';
    public const TYPE_LORE = 'lore';
    public const TYPE_EVENT = 'event';
    public const TYPE_VEHICLE = 'vehicle';

    public const TYPES = [
        self::TYPE_DENIZEN,
        self::TYPE_FACTION,
        self::TYPE_LANDMARK,
        self::TYPE_LOCATION,
        self::TYPE_BUILDING,
        self::TYPE_SETTLEMENT,
        self::TYPE_REGION,
        self::TYPE_COUNTRY,
        self::TYPE_DEITY,
        self::TYPE_ARTIFACT,
        self::TYPE_LORE,
        self::TYPE_EVENT,
        self::TYPE_VEHICLE,
    ];

    protected $fillable = [
        'title', 'type', 'text'
    ];

    /**
     * @return string
     */
    protected function getReferenceAttribute()
    {
        return 'title';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tome()
    {
        return $this->belongsTo(Tome::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
