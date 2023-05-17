<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'tipo_objeto_id', 'cantidad'];

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
    
    public function proveedores(){
        return $this->belongsToMany(Proveedor::class)->withPivot('precio');;
    }

    public function tipo_objeto(){
        return $this->belongsTo(TipoObjeto::class);
    }

    public function almacen(){
        return $this->belongsTo(TipoObjeto::class);
    }

}
