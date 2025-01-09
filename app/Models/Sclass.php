<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sclass extends Model
{
    /** @use HasFactory<\Database\Factories\SclassFactory> */
    use HasFactory;
    protected $fillable = [
        'class_name',
        'class_code',
        'start_from',
        'duration',
        'class_fee',
        'class_teacher_name',
        'max_no_students',
        'class_teacher_mobile_number',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'class_teacher_name', 'name');
    }
}
