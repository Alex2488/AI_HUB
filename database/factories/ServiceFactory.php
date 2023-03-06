<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->slug(),
            'title' => $this->faker->unique()->title(),
            'logo_link'=>$this->faker->imageUrl(),
            'link_to_service'=>$this->faker->url(),
            'category_id'=>CategoryFactory::factory(),
            'excerpt'=>$this->faker->words(),
            'information_1'=>$this->faker->paragraph(),
            'information_2'=>$this->faker->paragraph(),
            'information_3'=>$this->faker->paragraph(),
            'functionality_1'=>$this->faker->paragraph(),
            'functionality_2'=>$this->faker->paragraph(),
            'functionality_3'=>$this->faker->paragraph(),
            'functionality_4'=>$this->faker->paragraph(),
            'benefits_1'=>$this->faker->paragraph(),
            'benefits_2'=>$this->faker->paragraph(),
            'benefits_3'=>$this->faker->paragraph(),
        ];
    }
}
