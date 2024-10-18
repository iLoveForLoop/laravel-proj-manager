<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Seed 10 random projects
        \App\Models\Projects::factory(10)->create();
    }
}