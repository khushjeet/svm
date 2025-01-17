<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'guardian_name',
        'guardian_email',
        'child_name',
        'child_age',
        'mobile_number',
        'whatsapp_number',
        'message',
    ];
}
