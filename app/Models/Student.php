<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'program',
        'enrollment_year',
        'birthday',
    ];

    /**
     * Relationship: A student belongs to one user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: A student can enroll in many courses.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'class_student');
    }
}

