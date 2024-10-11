<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_awards', 'award_id', 'author_id');
    }
}
