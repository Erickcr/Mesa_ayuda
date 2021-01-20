<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas_frecuentes extends Model
{
    use HasFactory;
    protected $fillable = ['pregunta', 'respuesta', 'file'];
    protected $table = 'preguntas_frecuentes';
}
