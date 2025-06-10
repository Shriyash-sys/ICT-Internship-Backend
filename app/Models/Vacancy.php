<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'position_name',
        'category',
        'location',
        'experience',
        'stipend',
        'openings',
        'application_deadline',
        'description',
        'responsibility',
        'requirement',
        'skills',
        'seo_title',
        'seo_description',
        'seo_image'
    ];
}
