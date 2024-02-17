@extends('layouts.admin') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                                Pagos
                            </span>

                        <div class="card-tools">
                            <a href="{{url('/pagos/create')}}" class="btn btn-primary">
                                <i class="bi bi-person-fill-up"></i> Nuevo Pago
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

                                    <th>Monto</th>
                                    <th>Fecha de Pago</th>
                                    <th>Miembro</th>
                                    <th>Ministerio</th>
                                    <th>Concepto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pagos as $pago)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $pago->monto }}</td>
                                    <td>{{ $pago->fecha_pago }}</td>
                                    <td>{{ $pago->miembro->nombre_apellido }}</td>
                                    <td>{{ $pago->ministerio->nombre_ministerio }}</td>
                                    <td>{{ $pago->concepto }}</td>

                                    <td>
                                        <form action="{{ route('pagos.destroy',$pago->id) }}" method="POST">
                                            <a href="{{url('pagos',$pago->id)}}" type="button" class="btn btn-info"><i
                                                class="bi bi-eye-fill"></i></a>
                                            <a href="{{route('pagos.edit',$pago->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a> @csrf {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('Desea eliminar el registro?')" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <script>
                            $(function() {
                                $("#example1").DataTable({
                                    "pageLength": 10,
                                    "language": {
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Pagos",
                                        "infoEmpty": "Mostrando 0 a 0 de 0 Pagos",
                                        "infoFiltered": "(Filtrado de MAX total Pagos)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar _MENU_ Pagos",
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
                                    "responsive": true,
                                    "lengthChange": true,
                                    "autoWidth": false,
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
                                        }]
                                    }, {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }],
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
            {!! $pagos->links() !!}
        </div>
    </div>
</div>
@endsection