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
                'image_name' => null,
                'image_type' => null,
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
                'image_name' => null,
                'image_type' => null,
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
                'image_name' => null,
                'image_type' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
            'title' => 'Harry Potter e a Pedra Filosofal',
            'subtitle' => null,
            'description' => 'Harry Potter é antes de mais o fenómeno editorial de 1999. É-o porque demove crianças de jogos de computador e de infindáveis horas frente ao televisor. É-o porque está traduzido em cerca de 30 idiomas. É-o porque tem angariado os mais importantes prémios de literatura infanto-juvenil. É-o, por fim e entre outras inúmeras razões, porque ocupa há meses consecutivos os primeiros lugares das mais importantes listas de vendas mundiais. Mas Harry Potter, o personagem dos livros de J. K. Rowling, não é um herói habitual. É apenas um miúdo magricela, míope e desajeitado com uma estranha cicatriz na testa.',
            'ISBN' => '987-9-72-232533-2',
            'pages' => 260,
            'publication_date' => '2002-04-11',
            'publisher' => 'Editora Presença',
            'language' => 'pt',
            'rating' => null,
            'image_name' => 'HarryPotter&PedraFilosofal',
            'image_type' => '.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null
        ]
        ]);
        Book::factory(30)->create();
    }
}
