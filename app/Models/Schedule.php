<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'day_of_week',
        'time_slot',
        'room',
        'term',
    ];

    /**
     * Relationship: A schedule belongs to a course.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

