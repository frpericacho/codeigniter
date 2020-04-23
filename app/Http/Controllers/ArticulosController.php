<?php

namespace App\Http\Controllers;

use App\Http\Requests\NuevoArticuloRequest;
use App\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index(){
        $articulos = Articulos::orderBy('id','desc')->paginate(3);
        return view('articulos.articulos')->with(['articulos' => $articulos]);
    }

    public function nuevo(){
        return view('articulos.nuevo');
    }

    public function guardar(NuevoArticuloRequest $request){
        $art = Articulos::create($request->only('titulo','descripcion','cuerpo'));
        return redirect()->route('un_articulo',['art'=>$art->id]);
    }

    public function mostrar_articulo(Articulos $art){
        return view('articulos.mostrar_articulo')->with(['articulo' => $art]);
    }
}
