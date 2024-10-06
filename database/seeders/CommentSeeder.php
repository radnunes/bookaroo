<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            ['comment'=>'Comentário teste sobre o livro 1.','book_id' => 1,'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['comment'=>'Comentário teste sobre o livro 2.','book_id' => 2,'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null]

        ]);
    }
}
