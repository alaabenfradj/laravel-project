<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(7),
            'tags' => 'SPORT,MUSIC,FOOD',
            'owner' => $this->faker->name(),
            'location' => fake()->city(),
            'website' => fake()->companyEmail(),
        ];
    }
}
