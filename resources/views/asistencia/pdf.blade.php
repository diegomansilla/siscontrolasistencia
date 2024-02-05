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
                <th>No</th>

                <th>Fcha Asistencia</th>
                <th>Nombres y Apellidos del Miembro</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador_de_asistencia = 1;?>
            @foreach ($asistencias as $asistencia)
            <tr>
                <td><?php echo $contador_de_asistencia++;?></td>

                <td>{{ $asistencia->fcha_asistencia }}</td>
                <td>{{ $asistencia->miembro->nombre_apellido }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>