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
        Schema::create('bedroom_amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bedroom_id');
            $table->unsignedBigInteger('amenity_id');
            $table->timestamps();

            $table->foreign('bedroom_id')->references('id')->on('bedrooms')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('amenity_id')->references('id')->on('amenities')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedroom_amenities');
    }
};
