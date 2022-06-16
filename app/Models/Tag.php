<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts() {

        //many tags belong to many posts
        return $this->belongsToMany(Post::class)->withTimestamps();

    }
}
