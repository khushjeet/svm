<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'academic_year',
        'admission_number',
        'admission_date',
        'roll_number',
        'first_name',
        'last_name',
        'class',
        'religion',
        'category',
        'primary_contact_number',
        'caste',
        'mother_tongue',
        'profile_image',
        'dob',
        'gender',
        'blood_group',
        'father_name',
        'father_email',
        'father_mobile_number',
        'father_occupation',
        'mother_name',
        'mother_email',
        'mother_mobile_number',
        'mother_occupation',
        'permanent_address',
        'current_address',
    ];

    function parent_informations(){
        return $this->hasMany(ParentInformation::class);
    }

    function address(){
        return $this->hasManyThrough(Address::class,ParentInformation::class);
    }
}
