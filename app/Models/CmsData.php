<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsData extends Model
{
    use HasFactory;

    protected $fillable = [
        'carousel_image',
        'profile_title',
        'features_description',
        'profile_image',
        'features_section_title',
        'features',
        'video_section_title',
        'video_section_description',
        'videos',
        'testimonials_section_title',
        'testimonials_section_description',
        'userTestimonials',
        'pricing_section_title',
        'pricing_section_description',
        'pricingPlans',
        'contact_section_title',
        'contact_section_description',
        'no_telp',
        'no_wa',
        'alamat_1',
        'alamat_2',
    ];

    protected $casts = [
        'carousel_image' => 'array',
        'features' => 'array',
        'videos' => 'array',
        'userTestimonials' => 'array',
        'pricingPlans' => 'array',
    ];
}
