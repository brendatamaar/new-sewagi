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
        Schema::create('property_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->boolean('internet')->default(0);
            $table->boolean('private_parking')->default(0);
            $table->boolean('tv_cable')->default(0);
            $table->boolean('cleaning_service')->default(0);
            $table->boolean('charge_fee')->default(0);
            $table->integer('entire_space_price');
            $table->integer('co_living_price');
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_services');
    }
};
