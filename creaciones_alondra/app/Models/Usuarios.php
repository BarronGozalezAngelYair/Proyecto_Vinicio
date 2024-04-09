<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ap_materno',
        'ap_paterno',
        'correo',
        'contraseña',
    ];
}
