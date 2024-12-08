<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->unique()->word();
        $class = ['flaticon-tour', 'flaticon-report', 'flaticon-cms', 'flaticon-app', 'flaticon-helmet', 'flaticon-high-tech', 'flaticon-real-estate', 'flaticon-content', 'flaticon-search', 'flaticon-curriculum-vitae'];
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'icon_class' => Arr::random($class),
        ];
    }
}
