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
        Schema::create('property_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->enum('living_condition', ['co-living', 'entire-space']);
            $table->boolean('is_include_internet')->default(0);
            $table->boolean('is_include_park')->default(0);
            $table->boolean('is_include_tv_cable')->default(0);
            $table->boolean('is_include_cleaning')->default(0);
            $table->integer('service_fee');
            $table->boolean('charge_fee')->default(0);
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_prices');
    }
};
