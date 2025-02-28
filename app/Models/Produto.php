<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Campos permitidos para preenchimento em massa
    protected $fillable = ['nome', 'descricao', 'preco', 'quantidade_estoque'];
}
