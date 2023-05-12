<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->integer('no_of_seats');
            $table->integer('no_of_suitcases');
            $table->string('gear_box_type')->nullable();
            $table->string('fuel_state')->nullable();
            $table->integer('drivers_age_min')->nullable();
            $table->integer('drivers_age_max')->nullable();
            $table->time('default_pickup_time')->nullable();
            $table->time('default_return_time')->nullable();
            $table->string('location_kef_airport')->nullable();
            $table->string('location_eykjavik')->nullable();
            $table->string('displaying_name');
            $table->text('vehicle_description');

            $table->string('free_gps');
            $table->string('mileage');
            $table->string('wd');
            $table->string('air_conditioning');
            $table->string('fuel_policy');
            $table->string('fuel_type');
            $table->string('engine')->nullable();
            $table->string('doors_number')->nullable();
            $table->string('transmission');

            $table->string('extras_notset')->nullable();
            $table->string('extras_alloy_wheels')->nullable();
            $table->string('extras_blutooth')->nullable();
            $table->string('extras_damage_waiver')->nullable();
            $table->string('extras_free_cancellation')->nullable();
            $table->string('extras_sunroof')->nullable();
            $table->string('extras_radio')->nullable();
            $table->string('extras_no_deposit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
