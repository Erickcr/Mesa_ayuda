<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Help_topic;

class Tipo_usuario extends Model
{
    use HasFactory;
    protected $table = 'tipo_usuario';

   public function helptopic(){
      
        return $this->belongsTo('App\Models\Help_topic');
    }
}
