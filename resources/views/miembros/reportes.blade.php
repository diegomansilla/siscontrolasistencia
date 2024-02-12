@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            Reporte de Miembros
                        </span>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" style="height: 92px;">
                                <span class="info-box-icon bg-info">
                                    <a href="{{url('/miembros/pdf')}}" target="_blank">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Imprimir Reporte</span>
                                    <span class="info-box-number">Miembros</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="info-box">
                                <span class="info-box-icon bg-info">
                                    <a href="#">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </span>
                                <div class="info-box-content">
                                    <form action="{{url('/miembros/pdf_fechas')}}" target="_blank" method="get">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="">Desde</label>
                                                <input type="date" name="fi" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">Hasta</label>
                                                <input type="date" name="ff" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <div style="height: 37px;"></div>
                                                <button type="submit" class="btn btn-success">Generar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--<span class="info-box-text">Imprimir Reporte</span>
                                    <span class="info-box-number">Asistencias</span>-->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection