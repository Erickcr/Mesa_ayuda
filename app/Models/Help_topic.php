<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help_topic extends Model
{
    use HasFactory;
    protected $table = 'help_topic';


    public function ticket(){
        return $this->hasMany('App\Models\Ticket');
    }
}
