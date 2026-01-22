<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'property_type',
        'address',
        'rent_amount',
        'currency',
        'bedrooms',
        'bathrooms',
        'description',
        'contact_name',
        'contact_phone',
        'contact_email',
        'is_available',
    ];
}
