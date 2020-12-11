@extends('layouts.app')
@section('content')
    
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
    <h1 class="text-center">Crear Articulo</h1>

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

{{-- 
        <label for="nameItm">Nombre del Item:</label>
        <input type="text" name="nameItem" value="{{ old('nameItem') ?? $item->category ?? '' }}">
        <br>

        <label for="category">Categoria:</label>
        <textarea name="category">{{ old('category') ?? $category->category ?? '' }}</textarea>
        <br>


        <label for="description">Descripcion:</label>
        <textarea name="description">{{ old('description') ?? $description->description ?? '' }}</textarea>
        <br>

        <button type="submit">Aceptar</button> 
        
--}}

        <div id="fullscreen_bg" class="fullscreen_bg"/>
        <form class="form-signin">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-md-offset-4">
                   <div class="panel panel-default">
                       <div class="panel-body">
                           <h3 class="text-center">Agregar nuevo item</h3>

                           <form class="form form-signup" role="form">

                            <div class="form-group">
                                <div class="input-group">
                                   <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                   </span>
                                   <input type="text" name="nameItem" class="form-control" placeholder="Nombre del Item" value="{{ old('nameItem') ?? $item->category ?? '' }}" />
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
                       <button  class="btn btn-sm btn-primary btn-block" type="submit">Aceptar</button>
                       <a href="{{ route('item.index') }}" class="btn btn-sm btn-primary btn-block" >
                           Cancelar</a> </form>
                        <a href="/home" class="btn btn-sm btn-primary btn-block" >
                           Regresar a Inicio</a> </form>   
                   </div>
               </div>
           </div>
       </div>
       </form>
       
       
       </div> 
        
    </form>
</body>
</html>

@endsection