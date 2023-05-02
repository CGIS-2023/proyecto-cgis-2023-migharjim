<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio'];

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
    
    public function proveedores(){
        return $this->belongsToMany(Proveedor::class)->withPivot('precio');;
    }
}
