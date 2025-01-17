<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'teacher_image',
        'facebook_link',
        'twitter_link',
        'instagram_link',
    ];
}
