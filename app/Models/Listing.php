<?php

namespace App\Models;

use App\Models\User;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'location',
        'price',
        'square_feet',
        'house_type',
        'guarded',
        'furnish_type',
        'bathroom',
        'bedroom',
        'user_id',
        'admin_id',
        'status',
        'origin',
        'request_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
