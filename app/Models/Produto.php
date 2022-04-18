<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categoria;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';

    function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    function vendas(){
        
    }
}