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
        Schema::create('car_prices', function (Blueprint $table) {
            $table->id();
            $table->string('cost_initial')->nullable();
            $table->string('tax_initial')->nullable();
            $table->string('apr2sep_isk_cost_rental_per_day');
            $table->string('apr2sep_usd_cost_rental_per_day');
            $table->string('apr2sep_eur_cost_rental_per_day');
            $table->string('sep2apr_isk_cost_rental_per_day');
            $table->string('sep2apr_usd_cost_rental_per_day');
            $table->string('sep2apr_eur_cost_rental_per_day');
            $table->string('tax_rental_per_day')->nullable();
            $table->string('cost_rental_per_hour')->nullable();
            $table->string('tax_rental_per_hour')->nullable();
            $table->string('cost_delivery')->nullable();
            $table->string('tax_delivery')->nullable();
            $table->string('cost_delivery_return')->nullable();
            $table->string('tax_delivery_return')->nullable();
            $table->string('cost_security')->nullable();
            $table->string('tax_security')->nullable();
            $table->string('cost_oneway')->nullable();
            $table->string('tax_oneway')->nullable();
            $table->string('cost_late_pickup')->nullable();
            $table->string('tax_late_pickup')->nullable();
            $table->string('cost_late_return')->nullable();
            $table->string('tax_late_return')->nullable();
            $table->string('cost_customer_pickup_fee')->nullable();
            $table->string('tax_customer_pickup_fee')->nullable();
            $table->string('cost_customer_return_fee')->nullable();
            $table->string('tax_customer_return_fee')->nullable();
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_prices');
    }
};
