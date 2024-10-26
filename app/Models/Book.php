<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;
    protected $fillable = ['title', 'subtitle', 'description', 'ISBN',
        'pages','publication_date','publisher', 'language', 'rating',
        'image_name', 'image_type'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
