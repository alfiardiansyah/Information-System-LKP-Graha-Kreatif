<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $programs = [
            [
                'title' => 'Web Development Fundamentals',
                'slug' => 'web-development-fundamentals',
                'description' => 'Pelajari dasar-dasar HTML, CSS, JavaScript, dan PHP untuk membangun website modern dan responsif dari nol.',
                'category' => 'Programming',
                'price' => 2500000,
                'duration_weeks' => 12,
                'image_path' => 'images/programs/web-programming.jpg',
            ],
            [
                'title' => 'Advanced Microsoft Office',
                'slug' => 'advanced-microsoft-office',
                'description' => 'Kuasai formula kompleks, pivot table, macros, Word automation, dan presentasi profesional untuk dunia kerja.',
                'category' => 'Microsoft Office',
                'price' => 1800000,
                'duration_weeks' => 8,
                'image_path' => 'images/programs/microsoft-office.jpg',
            ],
            [
                'title' => 'Desain Grafis & Multimedia',
                'slug' => 'desain-grafis-multimedia',
                'description' => 'Pelajari Adobe Photoshop, Illustrator, dan teknik branding visual untuk kebutuhan media sosial dan industri kreatif.',
                'category' => 'Design',
                'price' => 2200000,
                'duration_weeks' => 10,
                'image_path' => 'images/programs/design-graphic.jpg',
            ],
        ];

        foreach ($programs as $program) {
            Program::firstOrCreate(['slug' => $program['slug']], $program);
        }
    }
}