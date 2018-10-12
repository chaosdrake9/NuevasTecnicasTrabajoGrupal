<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * no esta completo el modelo ya que no se sabe que necesite exactamente el
 * controlador de bloqueos
 * ademas se debera setear en env la base que se va a usar donde se va a usar
 * Juanpa Boada
 */

class modelo_bloqueos extends Model
{
    protected $table = 'bloqueos';
    public $timestamp = false;

    protected $fillabe = ['target', 'code', 'expdays'];
}
