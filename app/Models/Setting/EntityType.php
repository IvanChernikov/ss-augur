<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntityType
 * @package App\Models\Setting
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 */
class EntityType extends Model
{
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
