<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Market</title>
</head>
<body>
    <a href="{{ route('grabacion.create') }}">Nueva Grabación</a>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Tema</th>
            <th>Enlace</th>
        </tr>
        @foreach ($grabaciones as $grabacion)
            <tr>
                <td>{{ $grabacion->id }}</td>
                <td>{{ $grabacion->fecha }}</td>
                <td>
                    <a href="{{ route('grabacion.show', [$grabacion]) }}">{{ $grabacion->tema }}</a>
                </td>
                <td>{{ $grabacion->enlace }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>