<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettingForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('universes', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('entities', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('universe_id')
                ->references('id')
                ->on('universes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('entity_type_id')
                ->references('id')
                ->on('entity_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('attributes', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('entity_type_id')
                ->references('id')
                ->on('entity_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('relationship_types', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('parent_entity_type_id')
                ->references('id')
                ->on('entity_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('child_entity_type_id')
                ->references('id')
                ->on('entity_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('relationships', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('parent_entity_id')
                ->references('id')
                ->on('entities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('child_entity_id')
                ->references('id')
                ->on('entities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('relationship_type_id')
                ->references('id')
                ->on('relationship_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('tags', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('entity_id')
                ->references('id')
                ->on('entities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('notes', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('entity_id')
                ->references('id')
                ->on('entities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('values', function (Blueprint $table) {
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            /** @noinspection PhpUndefinedMethodInspection */
            $table->foreign('entity_id')
                ->references('id')
                ->on('entities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unique(['attribute_id', 'entity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('values', function (Blueprint $table) {
            $table->dropForeign(['entity_id']);
            $table->dropForeign(['attribute_id']);
            $table->dropUnique(['attribute_id', 'entity_id']);
        });
        Schema::table('notes', function (Blueprint $table) {
            $table->dropForeign(['entity_id']);
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->dropForeign(['entity_id']);
        });
        Schema::table('relationships', function (Blueprint $table) {
            $table->dropForeign(['relationship_type_id']);
            $table->dropForeign(['child_entity_id']);
            $table->dropForeign(['parent_entity_id']);
        });
        Schema::table('relationship_types', function (Blueprint $table) {
            $table->dropForeign(['child_entity_type_id']);
            $table->dropForeign(['parent_entity_type_id']);
        });
        Schema::table('attributes', function (Blueprint $table) {
            $table->dropForeign(['entity_type_id']);
        });
        Schema::table('entities', function (Blueprint $table) {
            $table->dropForeign(['entity_type_id']);
            $table->dropForeign(['universe_id']);
        });
        Schema::table('universes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
}
