<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class remedio_idoso extends Model
{
    public $timestamps = false;
    protected $table = 'remedio_idoso';
    protected $fillable = ['id_remedio','id_idoso','dosagem','horario'];
}
