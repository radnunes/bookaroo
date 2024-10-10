<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            BookSeeder::class,
            AuthorSeeder::class,
            AuhorBookSeeder::class,
            LiteraryMovimentSeeder::class,
            GenreSeeder::class,
            BookGenreSeeder::class,
            AwardsSeeder::class,
            CommentSeeder::class,
            RatingSeeder::class
        ]);
    }
}
