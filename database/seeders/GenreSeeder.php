<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            //Fiction
            ['name'=>'Fiction'],
            ['name'=>'Adveture'],
            ['name'=>'Romance'],
            ['name'=>'Mystery'],
            ['name'=>'Thriller'],
            ['name'=>'Science Fiction'],
            ['name'=>'Fantasy'],
            ['name'=>'Hitorical Fiction'],
            ['name'=>'Horror'],
            ['name'=>'Dystopian'],
            ['name'=>'Magical Realism'],
            ['name'=>'Paranormal'],
            ['name'=>'Young Adult'],
            //Non-Fiction
            ['name'=>'Non-Fiction'],
            ['name'=>'Biography'],
            ['name'=>'Memoir'],
            ['name'=>'Self-Help'],
            ['name'=>'True Crime'],
            ['name'=>'History'],
            ['name'=>'Science'],
            ['name'=>'Travel'],
            ['name'=>'Philosophy'],
            ['name'=>'Religion/Spirituality'],
            ['name'=>'Essays'],
            ['name'=>'Journalism'],
            //For Children
            ['name'=>'For Children'],
            ['name'=>'Picture Books'],
            ['name'=>'Early Readers'],
            ['name'=>'Middle Grade Fiction'],
            ['name'=>'Fairytales & Fables'],
            ['name'=>"Children's Fantasy"],
            //Others
            ['name'=>'Others'],
            ['name'=>'Graphic Novels/Comics'],
            ['name'=>'Poetry'],
            ['name'=>'Satire'],
            ['name'=>'Anthologies'],
            ['name'=>'Plays']
        ]);
    }
}
