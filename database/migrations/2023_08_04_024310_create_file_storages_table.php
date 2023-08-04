<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_storages', function (Blueprint $table) {
            $table->id();
            $table->integer('file_size');
            $table->string('file_driver');
            $table->string('file_extension');
            $table->string('file_original_name');
            $table->string('file_name');
            $table->string('file_path');
            $table->string('file_type');
            $table->text('file_url');
            $table->string('file_category');
            $table->boolean('is_only_one')->default(false);
            $table->boolean('is_used')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_storages');
    }
};
