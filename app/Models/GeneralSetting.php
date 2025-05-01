<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name', 'logo', 'favicon', 'preloader', 'email', 'website_url', 'phone',
        'address', 'city', 'district', 'country', 'postal_code', 'copyright', 'map', 'social_link'
    ];
    protected $casts = [
        'social_link' => 'array',
    ];
}
