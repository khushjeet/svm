<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'joining_date',
        'password',
        'mobile_number',
        'gender',
        'designation',
        'class',
        'dob',
        'qualifications',
        'profile_image',
        'doc',
    ];

}
