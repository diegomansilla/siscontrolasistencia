@extends('layouts.admin')

@section('content')

<div class="content" style="margin-left: 20px;">
    <h1>Datos del Ministerio <b>{{$ministerio->nombre_ministerio}}</b></h1><br>

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos</b></h3>

                </div>
                <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nombre Ministerio</label>
                                            <input type="text" name="nombre_ministerio"
                                                value="{{'$ministerio->nombre_ministerio'}}" class="form-control" disabled>
                                            <!--@error('nombre_apellido')
                                                <small style="color: red;">Este Campo es Obligatorio</small>
                                            @enderror-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha de Ingreso</label>
                                            <input type="date" name="fcha_ingreso" value="{{'$ministerio->fcha_ingreso'}}"
                                                class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            <p>
                                                {!!$ministerio->descripcion!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('/ministerios')}}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection