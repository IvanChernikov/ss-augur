<?php

use Illuminate\Database\Seeder;

use \App\Models\Setting\EntityType;
use \App\Models\Setting\Attribute;
use \App\Models\Setting\RelationshipType;

class DefaultSettingRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $character = EntityType::create([
            'name' => EntityType::RESERVED_NAME_CHARACTER,
            'description' => 'A generic character',
        ]);
        $character->attributes()->create([
            'name' => 'race',
            'data_type' => Attribute::TYPE_STRING,
        ]);
        $character->attributes()->create([
            'name' => 'age',
            'data_type' => Attribute::TYPE_INTEGER,
        ]);
        $character->attributes()->create([
            'name' => 'race',
            'data_type' => Attribute::TYPE_STRING,
        ]);
        $character->attributes()->create([
            'name' => 'occupation',
            'data_type' => Attribute::TYPE_STRING,
        ]);
        $character->attributes()->create([
            'name' => 'alignment',
            'data_type' => Attribute::TYPE_STRING,
        ]);

        $location = EntityType::create([
            'name' => EntityType::RESERVED_NAME_LOCATION,
            'description' => 'A generic location',
        ]);
        $location->attributes()->create([
            'name' => 'terrain',
            'data_type' => Attribute::TYPE_STRING,
        ]);

        $item = EntityType::create([
            'name' => EntityType::RESERVED_NAME_ITEM,
            'description' => 'A generic item'
        ]);
        $item->attributes()->create([
            'name' => 'price',
            'data_type' => Attribute::TYPE_FLOAT,
        ]);
        $item->attributes()->create([
            'name' => 'weight',
            'data_type' => Attribute::TYPE_FLOAT,
        ]);

        $event = EntityType::create([
            'name' => EntityType::RESERVED_NAME_EVENT,
            'description' => 'A generic event'
        ]);
        $event->attributes()->create([
            'name' => 'date',
            'data_type' => Attribute::TYPE_DATE,
        ]);

        $deity = EntityType::create([
            'name' => EntityType::RESERVED_NAME_DEITY,
            'description' => 'A generic deity'
        ]);
        $deity->attributes()->create([
            'name' => 'alignment',
            'data_type' => Attribute::TYPE_STRING,
        ]);
        $item->attributes()->create([
            'name' => 'nature',
            'data_type' => Attribute::TYPE_STRING,
        ]);
        $item->attributes()->create([
            'name' => 'faith',
            'data_type' => Attribute::TYPE_STRING,
        ]);

        // Relationships
        $parent = new RelationshipType();
        $parent->fill([
            'name' => 'Parenthood',
            'parent_verb' => 'parent of',
            'child_verb' => 'child of',
        ]);
        $parent->child_entity_type_id = $character->id;
        $parent->parent_entity_type_id = $character->id;
        $parent->save();

        $itemOwner = new RelationshipType();
        $itemOwner->fill([
            'name' => 'Ownership',
            'parent_verb' => 'owns',
            'child_verb' => 'owned by'
        ]);
        $parent->child_entity_type_id = $character->id;
        $parent->parent_entity_type_id = $item->id;
        $itemOwner->save();

        $itemPossessor = new RelationshipType();
        $itemPossessor->fill([
            'name' => 'Possession',
            'parent_verb' => 'possess',
            'child_verb' => 'possessed by'
        ]);
        $parent->child_entity_type_id = $character->id;
        $parent->parent_entity_type_id = $item->id;
        $itemPossessor->save();

    }
}
