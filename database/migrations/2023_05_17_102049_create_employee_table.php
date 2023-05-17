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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('birthday')->nullable();
            $table->tinyInteger('gender')->default('0');
            $table->string('visa_type');
            $table->string('visa_exipre_date');
            $table->string('contact');
            $table->string('image')->nullable();
            $table->string('current_address');
            $table->string('join_date');
            $table->string('resident_country');
            $table->tinyText('special_note');
            $table->integer('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};