<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'teacher_name',
        'teacher_image',
        'class_image',
        'time',
        'capacity',
    ];
}

