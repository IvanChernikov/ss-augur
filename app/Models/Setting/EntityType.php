<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Setting\EntityType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Attribute[] $attributes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Entity[] $entities
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntityType whereUpdatedAt($value)
 * @mixin \Eloquent
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntityType extends Model
{
    const RESERVED_NAME_CHARACTER = 'character';
    const RESERVED_NAME_LOCATION = 'location';
    const RESERVED_NAME_ITEM = 'item';
    const RESERVED_NAME_EVENT = 'event';
    const RESERVED_NAME_DEITY = 'deity';

    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function setSlugAttribute($value)
    {
        $this->slug = str_slug($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entities() {
        return $this->hasMany(Entity::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes() {
        return $this->hasMany(Attribute::class);
    }
}
