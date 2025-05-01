<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'price',
        'currency_symbol',
        'duration',
        'description',
        'service_include',
        'service_not_include',
    ];
    protected $casts = [
        'service_include' => 'array',
        'service_not_include' => 'array',
    ];

}
