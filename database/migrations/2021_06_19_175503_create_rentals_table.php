<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('user_id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->ForeignId('car_id');
            $table->foreign('car_id')->on('cars')->references('id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->ForeignId('package_id')->nullable();
            $table->foreign('package_id')->on('packages')->references('id');
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
        Schema::dropIfExists('rentals');
    }
}
