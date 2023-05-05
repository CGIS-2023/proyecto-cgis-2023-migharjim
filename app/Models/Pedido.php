<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_emision', 'fecha_recepcion' ];

    protected $casts = [
        'fecha_emision' => 'datetime:Y-m-d',
        'fecha_recepcion' => 'datetime:Y-m-d',
    ];

    public function objetos(){
        return $this->hasMany(Objeto::class)->withPivot('precio');
    }

    public function proveedors(){
        return $this->belongsTo(Proveedor::class);
    }

    public function encargados(){
        return $this->belongsTo(Encargado::class);
    }


    public function getDiasParaEntregaAttribute(){
        return Carbon::now()->diffInDays($this->fecha_recepcion);
    }
}
