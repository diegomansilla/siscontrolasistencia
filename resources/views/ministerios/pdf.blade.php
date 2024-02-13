<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Ministerios</title>
</head>
<body>
    <br>
    <h1>Reporte de Ministerios</h1>

    <table id="example1" class="table table-bordered table-striped table-sm">
        <thead class="thead">
            <tr>
            <th>Nro</th>
            <th>Nombre Ministerio</th>
            <th>Descripción</th>
            <th>Fecha Ingreso</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador_de_ministerio = 1;?>
            @foreach ($ministerios as $ministerio)
            <tr>
                <td><?php echo $contador_de_ministerio++;?></td>
                <td>{{$ministerio->nombre_ministerio}}</td>
                <td>{!!$ministerio->descripcion!!}</td>
                <td>{{$ministerio->fcha_ingreso}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>