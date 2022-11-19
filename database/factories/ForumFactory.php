<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'user_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, sint unde? Eos quisquam laudantium iste tempore, incidunt ipsum ipsam. Amet voluptatem excepturi aliquid, vel ipsum fugiat minima praesentium qui? Corporis.',
            'maxPresent' => $this->faker->randomNumber(),
            'designedTo' => 'Students',
            'tags' => 'SPORT,MUSIC,FOOD',
            'date' => $this->faker->date(),
            'owner' => 'jasser',
            'active' => $this->faker->boolean(),
        ];
    }
}
