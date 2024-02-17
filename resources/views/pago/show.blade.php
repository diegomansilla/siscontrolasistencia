@extends('layouts.admin')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Pago de {{$pago->miembro->nombre_apellido}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $pago->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Pago:</strong>
                            {{ $pago->fecha_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Ministerio Id:</strong>
                            {{ $pago->ministerio->nombre_ministerio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
