<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table     = "surveys";
    protected $fillable  = [
        'email', 
        'range_ege', 
        'sexo', 
        'favorite_social_network',
        'time_facebook',
        'time_whatsapp',
        'time_twitter',
        'time_instagram',
        'time_tiktok',
    ];
}
