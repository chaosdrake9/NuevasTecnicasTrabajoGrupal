<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * Me adelanto a la planificacion subiendo el modelo de inicio
 * ya que el controlador de bloqueos debe quedar en espera hasta tener
 * mas pruebas con vuejs y native Mobile, cosa que al parecer solamente se puede
 * hacer desde android studio programando en java directamente contra androidx
 * para mas info
 * https: //scotch.io/tutorials/the-easiest-way-to-add-authentication-to-any-app
 * https: //alligator.io/vuejs/getting-started-vue-nativescript/
 *
 * ademas se puede probar directamtente nativescript desde el browser sin ninguna
 * implementacion local desde aqui https: //play.nativescript.org/
 *
 * */

class modelo_inicio extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['usuario', 'edad', 'genero', 'preferencias', 'detalles'];

}
