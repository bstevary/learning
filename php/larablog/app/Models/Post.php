<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // We have post and it belongsTo a user

    public function user(){
        return $this->belongsTo(User::class);
    }
 


    public function post(){
        return $this->hasManyposts(Post::class);
    }

}