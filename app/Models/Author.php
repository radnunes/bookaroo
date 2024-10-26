<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bio', 'nationality', 'birthdate', 'gender', 'literary_moviment_id', 'image_name', 'image_type'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function awards()
    {
        return $this->belongsToMany(Awards::class, 'author_awards', 'author_id', 'award_id');
    }

    public function literary_moviments(){
        return $this->belongsToMany(Literary_moviment::class,'literary_moviments','author_id','literary_moviment_id');
    }


}
