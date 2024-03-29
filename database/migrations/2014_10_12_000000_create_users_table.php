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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_img')->nullable();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('flight_no');
            $table->string('driver_name');
            $table->string('license_no');
            $table->date('license_valid_date');
            $table->string('license_img');
            $table->string('role')->default('user');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
