<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentInformation extends Model
{
    /** @use HasFactory<\Database\Factories\ParentInformationFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'father_name',
        'father_email',
        'father_mobile_numer',
        'father_occupation',
        'mother_name',
        'mother_email',
        'mother_mobile_numer',
        'mother_occupation',
    ];

    function address(){
        return $this->belongsToMany(Address::class);
    }
}
