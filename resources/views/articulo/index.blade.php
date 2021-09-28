@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<a href="{{ route ('articulosComprado.index') }}" class="btn btn-primary">Articulos Comprados</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Presion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td> {{  ++$i }} </td>
            <td> {{ $articulo->codigo }} </td>
            <td> {{ $articulo->descripcion }} </td>
            <td> {{ $articulo->cantidad }} </td>
            <td> {{ $articulo->precio }} </td>
            <td> 
                <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="{{ url('/articulos/'.$articulo->id.'/edit') }}" class="btn btn-info">Editar</a> 
                @csrf
                @method('DELETE')
   
    <input id="codigo" name="codigo" type="hidden" value="{{$articulo->codigo}}" >
    <input id="descripcion" name="descripcion" type="hidden"  value="{{$articulo->descripcion}}" >
    <input id="cantidad" name="cantidad" type="hidden" value="{{$articulo->cantidad}}" >
    <input id="precio" name="precio" type="hidden" value="{{$articulo->precio}}" >

                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $articulos->links() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--script src="https://cdn.datatable.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatable.net/1.10.22/js/dataTables.bootstrap5.min.js"></script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $('$articulos').DataTable({
        "lengthMenu":[[5,10, 50, -1], [5, 10, 50, "All"]]
    })

});
</script>

@stop