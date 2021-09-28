@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content')
<form action="{{ url('/articulos/'.$articulo->id) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" tabindex="1">
 </div>
 <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
 </div>
 <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$articulo->cantidad}}" tabindex="3">
 </div>
 <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="text" value="{{$articulo->precio}}" class="form-control" tabindex="4">
 </div>
 <a href="{{ url('/articulos') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
 <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop