<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Comentario extends Model
{
    use HasFactory;

    // Relationship 1:N to table Users ( User model - hasMany(Comentario::class) )
    public function user(){
        return $this->belongsTo(User::class);
        // Permite la consulta de datos del usuario asociado al comentario.
        // $autor = Comentario::find(<user_id>)->user();
    }

    // Relationship 1:N to table Posts ( Post model - hasMany(Comentario::class) )
    public function post(){
        return $this->belongsTo(Post::class);
        // Permite la consulta de datos del post asociado al comentario.
        // $post = Comentario::find(<comentario_id>)->post();
    }
}
