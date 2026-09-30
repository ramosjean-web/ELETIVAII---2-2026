<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';

    public $increment = true;

    protected $fillable = [
        'nome', 'descricao', 'preco_base', 'categoria_id'
    ];
}
