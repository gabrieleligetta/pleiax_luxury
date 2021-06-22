<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('brand_id');
            $table->foreign('brand_id')->on('brands')->references('id');
            $table->string('name')->nullable('false');
            $table->string('image_url')->default('https://loremflickr.com/320/240');
            $table->string('year_begin')->nullable('true');
            $table->string('year_end')->nullable('true');
            $table->integer('generation')->nullable('true');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
