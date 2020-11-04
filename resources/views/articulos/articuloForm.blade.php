<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articulo</title>
</head>
<body>
    <h1>Nuevo Articulo</h1>
    
    <form action='/articulos' method="POST">
        
        @csrf

        <button type="submit">Subir</button>
    </form>
        
</body>
</html>