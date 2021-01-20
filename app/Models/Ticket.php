<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    protected $fillable = ['id_help_topic', 'id_usuario','id_departamento', 'estado', 'asunto','respuesta','file'];
    public function user(){
      
        return $this->belongsTo('App\Models\User');
    }
    public function helptopic(){
      
        return $this->belongsTo('App\Models\Help_topic');
    }

}
