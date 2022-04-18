<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Cliente;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";

    function cliente(){
        return $this->belongsTo(Cliente::class, 
        'id_cliente', 'id');
    }
}
