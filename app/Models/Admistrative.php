<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admistrative extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading_title',
        'image',
        'name',
        'desination',
    ];
}
