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
            ['name'=>'Trovadorismo'],
            ['name'=>'Humanismo'],
            ['name'=>'Quinhentismo'],
            ['name'=>'Classicismo'],
            ['name'=>'Barroco'],
            ['name'=>'Arcadismo'],
            ['name'=>'Romantismo'],
            ['name'=>'Realismo'],
            ['name'=>'Naturalismo'],
            ['name'=>'Parnasianismo'],
            ['name'=>'Pré-Modernismo'],
            ['name'=>'Modernismo'],
            ['name'=>'Pós-Modernismo']
        ]);
    }
}
