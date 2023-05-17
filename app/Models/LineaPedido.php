<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaPedido extends Model
{
    use HasFactory;

    protected $fillable = ['precio','cantidad_pedida'];

    public function objeto(){
        return $this->belongsTo(Objeto::class);
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}