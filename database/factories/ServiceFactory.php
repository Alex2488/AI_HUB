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
            'title' => $this->faker->unique()->title(),
            'slug' => $this->faker->unique()->slug(),
            'logo'=>$this->faker->imageUrl(),
            'image'=>$this->faker->imageUrl(),
            'link_to_service'=>$this->faker->url(),
            'category_id'=>CategoryFactory::factory(),
            'excerpt'=>$this->faker->words(),
            'content'=>$this->faker->paragraph(),
            'developer'=>$this->faker->company(),
            'release_date'=>$this->faker->year(),
            'is_published'=>'1',
        ];
    }
}
