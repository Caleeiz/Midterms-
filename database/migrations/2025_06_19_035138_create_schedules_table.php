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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->comment('Foreign key referencing the course.');
            $table->string('day_of_week', 10)->comment('Day of the week when the course is scheduled.');
            $table->dateTime('time_slot')->comment('Time slot of the class.');
            $table->string('room', 20)->comment('Room where the course will be held.');
            $table->integer('term')->comment('Term number (e.g., 1, 2).');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
