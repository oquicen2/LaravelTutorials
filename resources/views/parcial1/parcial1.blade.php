<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Peces - Parcial1</title>
</head>
<body>
    <h1>Gestión de Peces</h1>
    <ul>
        <li><a href="{{ url('/register-fish') }}">Registrar Peces</a></li>
        <li><a href="{{ url('/list-fish') }}">Listar Peces</a></li>
        <li><a href="{{ url('/fish-statistics') }}">Estadísticas de Peces</a></li>
    </ul>
</body>
</html>
