<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Business Growth',
                'subtitle' => 'Analytics',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&q=80'
            ],
            [
                'title' => 'Working Desk',
                'subtitle' => 'SQL',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'
            ],
            [
                'title' => 'Mobile App',
                'subtitle' => 'Mobile',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80'
            ],
            [
                'title' => 'Customer LTV Model',
                'subtitle' => 'ML',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=600&q=80'
            ],
            [
                'title' => 'Supply Chain Optimisation',
                'subtitle' => 'SQL',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=600&q=80'
            ],
            [
                'title' => 'HR Attrition Predictor',
                'subtitle' => 'R',
                'description' => 'Morbi leo risus, porta ac consectetur vestibulum eros cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare.',
                'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=600&q=80'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
