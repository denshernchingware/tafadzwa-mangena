<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'description' => 'Transforming complex data into actionable insights through advanced analytics, visualization, and strategic problem-solving. Passionate about uncovering patterns and driving data-informed decision making across organizations.',
            'main_image' => 'images/demo-freelancer-01.png',
            'additional_image' => 'images/demo-freelancer-03.png',
            'role' => 'Data Analyst'
        ]);
    }
}
