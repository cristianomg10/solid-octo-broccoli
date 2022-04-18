<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Venda;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";

    function vendas(){
        return $this->hasMany(Venda::class, 'id_cliente', 'id');
    }
}
