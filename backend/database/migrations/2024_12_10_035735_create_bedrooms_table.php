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
        Schema::create('bedrooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->enum('type', ['master', 'standard', 'pocket'])->nullable();
            $table->string('name')->nullable();
            $table->integer('size')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('quantity_available')->default(0);
            $table->enum('furniture', ['furnished', 'semi-furnished', 'unfurnished'])->nullable();
            $table->boolean('is_loft')->default(0);
            $table->enum('bed_arrangement', ['twin', 'single', 'queen', 'king'])->nullable();
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedrooms');
    }
};
