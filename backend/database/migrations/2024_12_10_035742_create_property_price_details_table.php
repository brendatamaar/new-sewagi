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
        Schema::create('property_price_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_price_id');
            $table->enum('length', ['12', '9', '6', '3']);
            $table->unsignedBigInteger('bedroom_id')->nullable();   
            $table->integer('paid_once')->nullable();
            $table->integer('paid_twice')->nullable();
            $table->integer('paid_quarterly')->nullable();
            $table->integer('paid_monthly')->nullable();
            $table->timestamps();

            $table->foreign('property_price_id')->references('id')->on('property_prices')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bedroom_id')->references('id')->on('bedrooms')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_price_details');
    }
};
