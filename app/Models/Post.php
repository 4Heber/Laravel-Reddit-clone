<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    // Relationship 1:N to table Users ( User model - hasMany(Post::class) )
    public function user(){
        return $this->belongsTo(User::class);
        // Permite la consulta de datos del usuario asociado al post.
        // $autor = Post::find(<user_id>)->user();
    }

    public function comunidad(){
        return $this->belongsTo(Comunidad::class);
        
    }
    public function commentario(){
        return $this->hasMany(Comentario::class);
        
    }
}
