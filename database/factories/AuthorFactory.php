<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'bio' => $this->faker->sentence(5),
            'nationality' => $this->faker->randomElement(['Portuguese', 'Chinese', 'Brazilian', 'Cuban', 'Angolan', 'Australian']),
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'literary_moviment_id' => $this->faker->randomNumber(1, 13),
            'award_id' => $this->faker->randomNumber(1, 2)
        ];
    }
}
