<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ratings')->insert([
            ['rating'=>4,'book_id' => 1,'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null],
            ['rating'=>2,'book_id' => 1,'created_at' => now(), 'updated_at' => now(), 'deleted_at' => null]

        ]);
    }
}
