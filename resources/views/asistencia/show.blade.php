@extends('layouts.admin')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Asistencia de {{ $asistencia->miembro->nombre_apellido }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asistencias.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha de Asistencia:</strong>
                            {{ $asistencia->fcha_asistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Miembro:</strong>
                            {{ $asistencia->miembro->nombre_apellido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
