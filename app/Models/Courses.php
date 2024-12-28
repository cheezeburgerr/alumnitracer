<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    /** @use HasFactory<\Database\Factories\CoursesFactory> */
    protected $guarded=[];
    public function users()
    {
        return $this->hasMany(User::class, 'course_ID');
    }
}