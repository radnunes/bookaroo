<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'subtitle', 'description', 'ISBN',
        'pages','publication_date','publisher', 'language', 'rating',
        'image-name', 'image-type'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function has_genre()
    {
        return $this->belongsToMany(Genre::class);
    }
}
