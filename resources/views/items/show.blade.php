@extends('layouts.app')
@section('content')
    


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Market-Crypto</title>
</head>
<body>
    <a href="{{ route('item.index') }}">Articulos</a>

    {{-- <form action="{{ route('item.destroy', [$item]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form> --}}

    <hr>
    <h1>ID Item # {{ $item->id }}</h1>
    <ul>
        <li>Nombre del Articulo: {{ $item->nameItem }}</li>
        <li>Categoria: {{ $item->category }}</li>
        <li>Descripcion: {{ $item->descryption }}</li>
    </ul>
</body>
</html>


@endsection