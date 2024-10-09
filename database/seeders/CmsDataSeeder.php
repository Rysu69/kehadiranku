<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CmsData;

class CmsDataSeeder extends Seeder
{
    public function run()
    {
        CmsData::create([
            'carousel_image' => json_encode([
                ['name' => 'Feature 1', 'route' => 'https://via.placeholder.com/1200x800?text=Event+1'],
                ['name' => 'Feature 2', 'route' => 'https://via.placeholder.com/1200x800?text=Event+2'],
                ['name' => 'Feature 3', 'route' => 'https://via.placeholder.com/1200x800?text=Event+3'],
            ]),
            'profile_title' => 'Kehadiranku – Presensi Online Siswa hadir sebagai solusi presensi dan absensi siswa yang praktis, terjangkau, efisien, transparan, serta dapat dipertanggungjawabkan. Dengan Kehadiranku, presensi siswa dapat dilakukan dengan mudah hanya melalui smartphone Bapak/Ibu Guru.',
            'profile_image' => 'https://via.placeholder.com/1200x800?text=Event+1', // Update this path

            'features_section_title' => 'Our Features',
            'features_description' => 'Apa saja yang Anda dapat saat menggunakan layanan Kehadiranku – Presensi Online Siswa',
            'features' => json_encode([
                ['name' => 'Feature 1', 'description' => 'Description of feature 1.'],
                ['name' => 'Feature 2', 'description' => 'Description of feature 2.'],
                ['name' => 'Feature 2', 'description' => 'Description of feature 2.'],
                // Add more features
            ]),

            'video_section_title' => 'Video Pengenalan',
            'video_section_description' => 'Kenali beberapa fitur unggulan dari 3 aplikasi yang kami sediakan untuk sekolah',
            'videos' => json_encode([
                ['title' => 'Video 1', 'url' => 'https://www.youtube.com/embed/video_id'],
                ['title' => 'Video 2', 'url' => 'https://www.youtube.com/embed/video_id'],
                ['title' => 'Video 3', 'url' => 'https://www.youtube.com/embed/video_id'],
                // Add more videos
            ]),

            'testimonials_section_title' => 'User Testimonials',
            'testimonials_section_description' => 'Layanan Presensi Online Siswa telah digunakan oleh berbagai sekolah di seluruh indonesia',
            'userTestimonials' => json_encode([
                ['name' => 'John Doe', 'comment' => 'This is a great service!', 'school' => 'School A'],
                ['name' => 'John Doe', 'comment' => 'This is a great service!', 'school' => 'School A'],
                ['name' => 'John Doe', 'comment' => 'This is a great service!', 'school' => 'School A'],

                // Add more testimonials
            ]),

            'pricing_section_title' => 'Pricing Plans',
            'pricing_section_description' => 'Choose a plan that suits your needs.',
            'pricingPlans' => json_encode([
                ['name' => 'Basic Plan', 'description' => 'Termasuk fitur dasar untuk absensi sekolah.', 'price' => 'Rp 199.000'],
                ['name' => 'Pro Plan', 'description' => 'Termasuk fitur lanjutan untuk mengurus sekolah.', 'price' => 'Rp 499.000'],
                // Add more pricing plans
            ]),

            'contact_section_title' => 'Contact Us',
            'contact_section_description' => 'Get in touch with us for any inquiries.',
            'no_telp' => '082343245144134',
            'no_wa' => '082352623535525',
            'alamat_1' => 'bengkuring',
            'alamat_2' => 'bengkuring juga',
        ]);
    }
}

