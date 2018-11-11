<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 * @package App\Models\Setting
 * @property integer $id
 * @property string $name
 * @property string $data_type
 * @property integer $entity_type_id
 * @property EntityType $entityType
 */
class Attribute extends Model
{
    protected $fillable = [
        'name', 'data_type'
    ];

    public function entityType() {
        return $this->belongsTo(EntityType::class);
    }

}
