<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Recruiter extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $fillable = [
        'company_name',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
