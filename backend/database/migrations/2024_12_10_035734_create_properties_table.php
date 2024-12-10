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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['apartment', 'house'])->nullable();
            $table->integer('unit_size')->nullable();
            $table->integer('building_size')->nullable();
            $table->boolean('is_co_living')->default(0);
            $table->boolean('is_entire_space')->default(0);
            $table->integer('bedrooms')->default(0);
            $table->integer('bathrooms')->default(0);
            $table->integer('available_room')->default(0);
            $table->integer('rented_room')->default(0);
            $table->integer('total_room')->default(0);
            $table->bigInteger('estimated_price')->nullable();
            $table->enum('land_area_type', ['residential', 'non residential'])->nullable();
            $table->enum('arrangement', ['townhouse', 'standalone'])->nullable();
            $table->enum('floor_range', ['below 5', 'beetween 5-10', 'above 10'])->nullable();
            $table->enum('storey', ['1', '2', '3+'])->nullable();
            $table->boolean('is_pet_friendly')->default(0);
            $table->string('address')->nullable();
            $table->string('property_number')->nullable();
            $table->string('property_detail')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('village')->nullable();
            $table->string('postcode')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('co_living_min_price')->default(0);
            $table->integer('entire_space_min_price')->default(0);
            $table->enum('furniture', ['furnished', 'semi-furnished', 'unfurnished'])->nullable();
            $table->enum('belong_to', ['1', '2', '3'])->nullable();
            $table->enum('ownership_status', ['0', '1'])->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_insured')->default(0);
            $table->boolean('is_draft')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->integer('step')->default(0);
            $table->string('link_360_file')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
