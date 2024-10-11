<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorAwardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('author_awards')->insert([
            ['author_id'=>1,'award_id'=>1],
            ['author_id'=>1,'award_id'=>2],
            ['author_id'=>2,'award_id'=>1],
        ]);
    }
}
