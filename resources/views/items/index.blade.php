@extends('layouts.app')
@section('content')
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



{{-- aqui va el contenido --}}
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulos</title>
</head>
<body>
    <h1>
        Articulos de Zaltology
    </h1>
      @csrf
      <div id="fullscreen_bg" class="fullscreen_bg"/>
             <form class="form-signin">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-3">
                    <div class="panel panel-default">
                    <div class="panel panel-primary">
                    <h3 class="text-center"> Inventario</h3>
                    <div class="panel-body">    
            
                <table class="table table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Descripcion</th>
                                    <th>Editar</th>  
                                    <th>Eliminar</th> 
                                </tr>
                            </thead>   
                            <tbody>
                                @foreach ($items as $item)  
                                <tr>
                                    
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nameItem }}</td>
                                    <td>{{ $item->category }}</td>
                                    
                                    <td><a href="{{ route('item.show', [$item]) }}">{{ $item->description }}</a></td>
                                
                                    <td><a href="{{ route('item.edit', [$item->id]) }}" class="btn btn-sm btn-primary btn-block" role="button">Editar</a></td>

                                    <td>
                                        <form 
                                            action="{{ route('item.destroy', [$item]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button  class="btn btn-sm btn-primary btn-block" role="button">Eliminar</button>
                                        </form>
                                    </td>

                                    </tr>
                                @endforeach

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


                            </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>                            
    </table>
            <a href="{{ route('item.create') }}" class="btn btn-sm btn-primary btn-block" role="button">Agregar nuevo item</a>
            
</form>
</body>
</html>

@endsection