@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Asistencias
                        </span>

                        <div class="card-tools">
                            <a href="{{url('/asistencias/create')}}" class="btn btn-primary">
                                <i class="bi bi-person-fill-up"></i> Nueva Asistencia
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Fcha Asistencia</th>
                                    <th>Nombres y Apellidos del Miembro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $asistencia->fcha_asistencia }}</td>
                                    <td>{{ $asistencia->miembro->nombre_apellido }}</td>

                                    <td>
                                        <form action="{{ route('asistencias.destroy',$asistencia->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('asistencias.show',$asistencia->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i></a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('asistencias.edit',$asistencia->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Desea eliminar el registro?')" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            $(function () {
                                $("#example1").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Asistencias",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Asistencias",
                                        "infoFiltered": "(Filtrado de MAX total Asistencias)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar _MENU_ Asistencias",
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
            {!! $asistencias->links() !!}
        </div>
    </div>
</div>
@endsection