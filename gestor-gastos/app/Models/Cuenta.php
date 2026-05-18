<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuentas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'saldo',
        'moneda'
    ];
}