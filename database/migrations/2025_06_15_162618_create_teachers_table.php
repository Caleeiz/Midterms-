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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('Foreign key from users table.');
            $table->string('first_name', 255)->comment('Teacher first name.');
            $table->string('last_name', 255)->comment('Teacher last name.');
            $table->string('email', 50)->comment('Teacher email address.');
            $table->string('department', 10)->comment('Teacher department code.');
            $table->dateTime('birthday')->comment('Teacher birthday.');
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
        Schema::dropIfExists('teachers');
    }
};

