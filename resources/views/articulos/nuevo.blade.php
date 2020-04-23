<!--resources/views/articulos/nuevo.blade.php -->
@extends('layouts.app')

@section('contenido')
    <h2>Insertar artículo</h2>
    <a href=" {{route('articulos')}}" title="Artículos">Artículos</a>
    <br/><br/>

    @if(count($errors) > 0)
        <hr/>
        <h3>Posibles errores:</h3>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        <hr/>
    @endif
    
    <!--FORMULARIO-->
    <form action="{{route('guardar_articulo')}}" method="POST">
        <!--Para que laravel permita hacer post --
        -- Evita TokenMismatchException-->
        {{csrf_field()}}

        <label for="titulo">Título:</label> <br/>
        <input type="text" name="titulo" class="input" value="{{old('titulo')}}"/> 
        <br/><br/>

        <label for="descripcion">Descripción:</label> <br/>
        <textarea rows="5" name="descripcion" class="form_control"/> 
            {{ old('descripcion')}}</textarea>
        <br/><br/>

        <label for="cuerpo">Cuerpo:</label> <br/>
        <textarea rows="10" name="cuerpo" class="form_control"/>
            {{ old('cuerpo')}}</textarea> 
        <br/><br/>

        <button type="submit" class='btn btn-primary'>Crear artículo </button>
    </form>
@endsection