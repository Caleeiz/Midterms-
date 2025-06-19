<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'department',
        'birthday',
    ];

    /**
     * Relationship: A teacher belongs to one user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: A teacher teaches many courses.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
