<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'median_income',
        'land_price',
        'price_per_square_feet',
        'traffic',
        'house_type'
    ];
}
