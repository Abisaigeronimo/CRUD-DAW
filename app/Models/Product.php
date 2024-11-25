<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Nombre de la tabla
    protected $primaryKey = 'rfc'; // Cambia 'rfc' al nombre de tu clave primaria
    public $incrementing = false; // Si tu clave primaria no es un entero autoincremental
    protected $keyType = 'string'; // Cambia a 'string' si es un valor alfanumérico

    protected $fillable = [
        'RFC',
        'clave_puesto',
        'horas_asignadas',
        'fecha_ingreso_puesto',
        'fecha_termino_puesto',
        'fecha_de_ratificacion_puesto',
    ];
}