<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('world_settings', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			
			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			
			$table->string('name');
			$table->text('description')->default('');
		});
		
		Schema::create('world_areas', function (Blueprint $table) {
			$table->increments('id');
			
			$table->unsignedInteger('setting_id');
			$table->foreign('setting_id')->references('id')->on('world_settings');
			
			$table->string('name');
			$table->string('type');
			$table->text('description');
			
		});
		
		Schema::create('world_locations', function (Blueprint $table) {
			$table->increments('id');
			
			$table->unsignedInteger('setting_id');
			$table->foreign('setting_id')->references('id')->on('world_settings');
			
			$table->unsignedInteger('area_id');
			$table->foreign('area_id')->references('id')->on('world_areas');
			
			$table->string('name');
			$table->string('type');
			$table->text('description');
		});
		
		Schema::create('world_factions', function (Blueprint $table) {
			$table->increments('id');
			
			$table->unsignedInteger('setting_id');
			$table->foreign('setting_id')->references('id')->on('world_settings');
			
			$table->string('name');
			$table->string('type');
			$table->text('description');
		});
		
		Schema::create('world_characters', function (Blueprint $table) {
			$table->increments('id');
			
			$table->unsignedInteger('setting_id');
			$table->foreign('setting_id')->references('id')->on('world_settings');
			
			$table->string('name');
			$table->string('type');
			$table->text('description');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('world_settings');
    }
}
