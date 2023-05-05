<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
