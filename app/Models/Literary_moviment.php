<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Literary_moviment extends Model
{
    protected $fillable = ['name'];

    public function authors()
    {
        return $this->belongsToMany(Literary_moviment::class,'literary_moviments','literary_moviment_id', 'author_id');
    }
}
