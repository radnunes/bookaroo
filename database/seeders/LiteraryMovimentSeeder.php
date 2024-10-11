<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiteraryMovimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('literary_moviments')->insert([

            ['name'=>'Modernism'],
            ['name'=>'The Augustans'],
            ['name'=>'Romanticism'],
            ['name'=>'American Romanticism'],
            ['name'=>'Transcendentalism'],
            ['name'=>'Gothic Fiction'],
            ['name'=>'Realism'],
            ['name'=>'Naturalism'],
            ['name'=>'Stream of consciousness'],
            ['name'=>'The Harlem Renaissance'],
            ['name'=>'The Lost Generation'],
            ['name'=>'Minimalism'],
            ['name'=>'Magical realism'],
            ['name'=>'Surrealism'],
            ['name'=>'Postmodernism']
        ]);
    }
}
