<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' => Category::factory(), // Automatically create a category if none exists
            'title' => $this->faker->jobTitle(),
            'slug' => $this->faker->slug(),
            'company_name' => $this->faker->company(),
            'salary_range' => $this->faker->numberBetween(30000, 150000) . ' - ' . $this->faker->numberBetween(150001, 300000),
            'address' => $this->faker->streetAddress(),
            'job_type' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
