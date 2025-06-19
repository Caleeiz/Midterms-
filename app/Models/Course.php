<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'course_code',
        'credits',
        'description',
    ];

    /**
     * Relationship: A course belongs to one teacher.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Relationship: A course has many schedules.
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Relationship: A course can have many students (via class_student pivot).
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_student');
    }
}



