<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Adicione os atributos que você deseja permitir para atribuição em massa
    protected $fillable = [
        'title',
        'content',
    ];
}
