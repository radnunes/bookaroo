<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'subtitle' => $this->faker->sentence(5),
            'description' => $this->faker->text(500),
            'ISBN' => $this->faker->isbn13(),
            'pages' => $this->faker->randomNumber(),
            'publication_date' => $this->faker->date(),
            'publisher' => $this->faker->company(),
            'language' => $this->faker->languageCode(),
            'rating' => null,
            'image-name' => null,
            'image-type' => null,
            'created_at' => now()
                ->subdays(fake()->numberBetween(3, 15))
                ->subHours(fake()->numberBetween(0, 23))
                ->subMinutes(fake()->numberBetween(0, 59)),
            'updated_at' => now(),
            'deleted_at' => fake()->boolean(80) ? null : now()
        ];
    }
}
