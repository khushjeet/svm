<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'teacher_id',
        'time',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
