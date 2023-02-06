<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Comunidad extends Model
{
    use HasFactory;

    // Relationship N:M to table Users (User model - hasMany(Comunidad::class)
    public function users(){
        return $this->hasMany(User::class);
        // Permite la consulta de los datos de los usuarios asociados a la comunidad.
        // $user = Comunidad::find(<user_id>)->users;
    }

    // Relationship N:M to table Users (User model - hasMany(Comunidad::class)
    public function posts(){
        return $this->hasMany(Post::class);
        // Permite la consulta de los datos de los posts asociados a la comunidad.
        // $post = Comunidad::find(<user_id>)->posts;
    }
}
