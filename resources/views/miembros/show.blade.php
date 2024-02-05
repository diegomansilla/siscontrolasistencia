@extends('layouts.admin')

@section('content')

<div class="content" style="margin-left: 20px;">
    <h1>Datos del Miembro</h1><br>

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos Registrados</b></h3>

                </div>
                <div class="card-body" style="display: block;">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombres y Apellidos</label>
                                        <input type="text" name="nombre_apellido" value="{{$miembro->nombre_apellido}}"
                                            class="form-control" disabled>
                                        <!--@error('nombre_apellido')
                                                <small style="color: red;">Este Campo es Obligatorio</small>
                                            @enderror-->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{$miembro->email}}"
                                            class="form-control" disabled>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="number" name="telefono" value="{{$miembro->telefono}}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        <input type="date" name="fcha_nacimiento" value="{{$miembro->fcha_nacimiento}}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <select name="genero" class="form-control" id="" disabled>
                                            @if($miembro->genero == 'Masculino')
                                            <option value="Masculino">Maculino</option>
                                            <option value="Femenino">Femenino</option>
                                            @else
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Maculino</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ministerio</label>
                                        <input type="text" name="ministerio" value="{{$miembro->ministerio}}"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" value="{{$miembro->direccion}}" name="direccion"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Foto</label><br>
                                @if($miembro->imagen == '')
                                    @if($miembro->genero == 'Masculino')
                                        <img src="{{url('images/avatar-hombre.png')}}" width="100px" alt="">
                                    @else
                                        <img src="{{url('images/avatar-mujer.png')}}" width="100px" alt="">
                                    @endif
                                @else
                                    <center>
                                        <img src="{{asset('storage').'/'.$miembro->imagen}}" width="100px" alt="">
                                    </center>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('/miembros')}}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection