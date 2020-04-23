<?php
//\app\Articulos.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model{
    protected $table = 'articulos';
    
    //Agregar datos
    protected $fillable =['titulo','descripcion','cuerpo'];
}