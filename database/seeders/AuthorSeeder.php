<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert(values: [
            [
                'name'=>'Leandro Santos',
                'bio'=>'o maior autor do mundo',
                'nationality'=>'Portuguese',
                'birthdate'=>'2004/6/11',
                'gender'=>'M',
                'literary_moviment_id'=>6
            ]
        ]);

        Author::factory(2)->create();
    }
}
