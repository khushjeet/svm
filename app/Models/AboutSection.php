<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'button_text',
        'button_link',
        'ceo_name',
        'ceo_title',
        'ceo_image',
        'images',
        'image_1',
        'image_2',
        'image_3',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
