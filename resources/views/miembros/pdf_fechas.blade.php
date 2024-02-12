<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Asistencias</title>
</head>
<body>
    <br>
    <h1>Reporte de Asistencias</h1>

    <table id="example1" class="table table-bordered table-striped table-sm">
        <thead class="thead">
            <tr>
            <th>Nro</th>
            <th>Nombres y Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Agregado</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador_de_miembro = 1;?>
            @foreach ($miembros as $miembro)
            <tr>
                <td><?php echo $contador_de_miembro++;?></td>
                <td>{{ $miembro->nombre_apellido }}</td>
                <td>{{ $miembro->telefono }}</td>
                <td>{{ $miembro->email }}</td>
                <td>{{ $miembro->fcha_ingreso }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>