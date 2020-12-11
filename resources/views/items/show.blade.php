@extends('layouts.app')
@section('content')
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ----------> 


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zaltology</title>
</head>
    <body>
            {{-- <a href="{{ route('item.index') }}">Articulos</a> --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(isset($item))
                <form action="{{ route('item.update', [$item]) }}" method="POST">
                @method('patch')
            @else
            <form action="{{ route('item.store') }}" method="POST">
            @endif
                @csrf

            {{-- <form action="{{ route('item.destroy', [$item]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Eliminar</button>
            </form> --}}
            
        <!------ Contenedor articulo a modificar ---------->  
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tbody>


                                        <h2 class="text-center">Item a Modificar</h2>
                                        <tr>
                                            <th scope="col">ID Articulo: {{ $item->id}}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Nombre del Articulo: {{ $item->nameItem }}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Categoria: {{ $item->category }}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Descripcion: {{ $item->description }}</th>
                                        </tr>


                                    </tbody>   
                                </thead>   
                            </table>
                        </div>   
                    </div>        
                </div>    
            </div>
        <!------ Contenedor articulo a modificar ---------->   

        <!------ Contenedor Editar Item ----------> 
        <div id="fullscreen_bg" class="fullscreen_bg"/>
            <form class="form-signin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                        <h2 class="text-center">Editar item</h2>

                                            <form class="form form-signup" role="form">

                                            <div class="form-group">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                                    </span>
                                                <input type="text" name="nameItem" class="form-control" placeholder="Nombre del Item" value="{{ old('nameItem') ?? $item->item ?? '' }}" />
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                                                <input  type="Text" name="category" class="form-control" placeholder="Categoria" {{ old('category') ?? $category->category ?? '' }} />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                                                <input   type="Text" name="description" class="form-control" placeholder="Descripcion" {{ old('description') ?? $description->description ?? '' }} />
                                                </div>
                                            </div>
                                                <button action="{{ route('item.update', [$item]) }}" method="POST" class="btn btn-sm btn-primary btn-block" type="submit">Actualizar</button>

                                                <a href="{{ route('item.index') }}" class="btn btn-sm btn-primary btn-block" >
                                                    Cancelar</a> </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </body>
</html>


@endsection