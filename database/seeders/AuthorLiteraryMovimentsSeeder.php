<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorLiteraryMovimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('author__literary_moviments')->insert([
            ['author_id'=>1,'literary_moviments_id'=>12],
            ['author_id'=>2,'literary_moviments_id'=>8],
            ['author_id'=>3,'literary_moviments_id'=>5]
        ]);
    }
}
