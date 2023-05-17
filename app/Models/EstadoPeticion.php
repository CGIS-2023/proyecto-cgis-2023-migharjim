<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPeticion extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}