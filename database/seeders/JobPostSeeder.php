<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPost;

class JobPostSeeder extends Seeder
{
    public function run()
    {
        // Create 20 job posts
        JobPost::factory(100)->create();
    }
}
