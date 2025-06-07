<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'logo',
        'company_name',
        'category',
        'founded_date',
        'website',
        'phone',
        'employees',
        'street',
        'city',
        'state',
        'country',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'description',
        'photo',
    ];
}
