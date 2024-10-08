<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Aventura no Mar',
                'subtitle' => null,
                'description' => 'Uma aventura no mar',
                'ISBN' => '111-1-11-111111-1',
                'pages' => 150,
                'publication_date' => '2004-01-11',
                'publisher' => 'Porto Editora',
                'language' => 'pt',
                'rating' => null,
                'image-name' => null,
                'image-type' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
                'title' => 'Natureza Selvagem',
                'subtitle' => null,
                'description' => 'Um livro detalhado sobre os maiores perigos na selva.',
                'ISBN' => '222-2-22-222222-2',
                'pages' => 738,
                'publication_date' => '1930-07-23',
                'publisher' => 'Leya',
                'language' => 'en',
                'rating' => null,
                'image-name' => null,
                'image-type' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
                'title' => 'Tecnologia e Futuro',
                'subtitle' => null,
                'description' => 'Um livro sobre o presente e o futuro da tecnologia.',
                'ISBN' => '333-3-33-333333-3',
                'pages' => 400,
                'publication_date' => '2024-02-15',
                'publisher' => 'Leya',
                'language' => 'en',
                'rating' => null,
                'image-name' => null,
                'image-type' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ]
        ]);
        //Book::factory(30)->create();
    }
}
