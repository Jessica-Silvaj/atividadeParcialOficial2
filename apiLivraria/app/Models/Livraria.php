<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livraria extends Model
{
    use SoftDeletes;
    protected $table = 'Livros';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome_livro',
        'autor_livro',
        'ano_livro',
        'genero_livro',
        'editora_livro',
        'paginas_livro'
    ];

   // public $timestamps = true;

}
