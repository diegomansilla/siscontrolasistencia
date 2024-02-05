@extends('layouts.admin')

@section('content')

<div class="content" style="margin-left: 20px;">
    <h1>Ministerios</h1>

    @if($message = Session::get('mensaje'))
    <script>
        Swal.fire({
            title: "Good job!",
            text: "{{$message}}",
            icon: "success"
        });
    </script>
    @endif


    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Ministerios registrados</b></h3>
                    <div class="card-tools">
                        <a href="{{url('/ministerios/create')}}" class="btn btn-primary">
                            <i class="bi bi-person-fill-up"></i>
                            Agregar Ministerio
                        </a>
                    </div>
                </div>
                <div class="card-body" style="display: block;">

                    <table id="example1" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre Ministerio</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Fecha Ingreso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 0; ?>
                            @foreach($ministerios as $ministerio)
                            <tr>
                                <td>
                                    <?php echo $contador = $contador + 1; ?>
                                </td>
                                <td>{{$ministerio->nombre_ministerio}}</td>
                                <td>{!!$ministerio->descripcion!!}</td>
                                <td style="text-align: center;">
                                    @if($ministerio->estado == '1')
                                    <button class="btn btn-success btn-sm" style="border-radius: 20px;">Activo</button>
                                    @else
                                    <button class="btn btn-danger btn-sm" style="border-radius: 20px;">Inactivo</button>
                                    @endif
                                </td>
                                <td>{{$ministerio->fcha_ingreso}}</td>
                                <td style="text-align: center;">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{url('ministerios',$ministerio->id)}}" type="button" class="btn btn-info"><i
                                                class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('ministerios.edit',$ministerio->id)}}" type="button"
                                            class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="{{url('ministerios',$ministerio->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--<tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Rendering engine</th>
                                <th rowspan="1" colspan="1">Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th>
                                <th rowspan="1" colspan="1">Engine version</th>
                                <th rowspan="1" colspan="1" style="display: none;">CSS grade</th>
                            </tr>
                        </tfoot>-->
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Ministerios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Ministerios",
                                    "infoFiltered": "(Filtrado de MAX total Ministerios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Ministerios",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    }, {
                                        extend: 'csv'
                                    }, {
                                        extend: 'excel'
                                    }, {
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                {
                                    extend: 'colvis',
                                    text: 'Visor de columnas',
                                    collectionLayout: 'fixed three-column'
                                }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });

                        /*$(function () {
                            $("#example1").DataTable({
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });*/
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection