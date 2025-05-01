<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderText extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_title', 'about_sub_title',
        'resume_title', 'resume_sub_title',
        'service_title', 'service_sub_title',
        'skill_title', 'skill_sub_title',
        'project_title', 'project_sub_title',
        'testimonial_title', 'testimonial_sub_title',
        'price_title', 'price_sub_title',
        'blog_title', 'blog_sub_title',
        'contact_title', 'contact_sub_title',
        'client_title', 'client_sub_title',
        'faq_title', 'faq_sub_title',
        'education_title', 'education_sub_title',
        'experiance_title', 'experiance_sub_title',
        'certificate_title', 'certificate_sub_title',
        'training_title', 'training_sub_title',
        'social_title', 'social_sub_title',
    ];
}
