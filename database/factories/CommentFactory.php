<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body'=>$this->faker->paragraph(),
            'created_at'=>$this->faker->now(),
            'updated_at'=>$this->faker->now(),
            'service_id'=>ServiceFactory::factory(),
            'user_id'=>UserFactory::factory(),

        ];
    }
}
