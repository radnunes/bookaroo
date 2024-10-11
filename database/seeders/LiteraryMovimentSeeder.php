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
            //Classical
            ['name'=>'Ancient'],
            ['name'=>'Medieval'],
            //Renaissance
            ['name'=>'Renaissance'],
            ['name'=>'Enlightenment'],
            //18th to 19th century
            ['name'=>'Romanticism'],
            ['name'=>'Gothic'],
            ['name'=>'Realism'],
            ['name'=>'Naturalism'],
            ['name'=>'Transcendentalism'],
            //Early 20th century
            ['name'=>'Modernism'],
            ['name'=>'Symbolism'],
            ['name'=>'Surrealism'],
            //Post-World War II
            ['name'=>'Postmodernism'],
            ['name'=>'Beat Generation'],
            ['name'=>'Magical Realism'],
            //Contemporary
            ['name'=>'Contemporary'],
            ['name'=>'Postcolonial'],
            ['name'=>'Cyberpunk and Science Fiction'],
            ['name'=>'Feminist Literature']
        ]);
    }
}
