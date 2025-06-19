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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Foreign key from user.');
            $table->string('first_name', 255)->comment('Student first name.');
            $table->string('last_name', 255)->comment('Student last name.');
            $table->string('program', 255)->comment('Student program.');
            $table->year('enrollment_year')->comment('Year the student enrolled.');
            $table->dateTime('birthday')->comment('Student birthday.');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
