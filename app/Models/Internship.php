<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'internship_name',
        'company',
        'industry',
        'location',
        'contact_email',
        'contact_phone',
        'description',
    ];
}

