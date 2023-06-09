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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('surname')->nullable();
            $table->string('email');
            $table->integer('passport_number');
            $table->integer('passport_series');
            $table->string('passport_issued');
            $table->string('password');
            $table->string('city')->default('')->nullable();
            $table->string('date')->default('')->nullable();
            $table->string('education')->default('')->nullable();
            $table->string('telephone')->nullable()->default('');
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
