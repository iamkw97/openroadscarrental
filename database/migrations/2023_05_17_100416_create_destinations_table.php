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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('destination_title');
            $table->string('destination_sub_title')->nullable();
            $table->string('published_date')->nullable();
            $table->text('destination_description_introduction');
            $table->text('destination_description_body');
            $table->text('destination_description_conclusion');
            $table->string('destination_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
