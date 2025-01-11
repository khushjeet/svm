<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{
    /** @use HasFactory<\Database\Factories\SclassFactory> */
    use HasFactory;

    protected $fillable = [
        'class_name_in_words',
        'class_name_in_number',
        'class_fee',
        'class_code',
        'no_of_students',
        'no_of_subject',
        'teacher_id',
        'class_teacher_first_name',
        'class_teacher_last_name',

    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
    

}
