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
            $table->string('nik');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('region');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('calling_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->date('dob')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->integer('nationality')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->boolean('is_active')->default(1);
            $table->rememberToken();
            $table->boolean('is_email_notified')->default(1);
            $table->boolean('is_sms_notified')->default(1);
            $table->boolean('is_whatsapp_notified')->default(1);
            $table->boolean('is_newsletter_enabled')->default(1);
            $table->boolean('is_verified_identity')->default(0);
            $table->boolean('is_verified_selfie')->default(0);
            $table->boolean('is_confirmed_identity')->default(0);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
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
