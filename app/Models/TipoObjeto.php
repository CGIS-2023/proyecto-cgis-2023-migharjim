<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoObjeto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function objetos(){
        return $this->hasMany(Objeto::class);
    }
}
