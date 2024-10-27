<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;
    protected $fillable = ['title', 'subtitle', 'description', 'ISBN',
        'pages','publication_date','publisher_id', 'language_id', 'rating',
        'image_name', 'image_type'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Languages::class, 'language_id', 'id');
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
