@extends('layouts.admin')

@section('content')

<div class="content" style="margin-left: 20px;">
    <h1>Actualización del Ministerio <b>{{$ministerio->nombre_ministerio}}</b></h1><br>

    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        <li>{{$error}}</li>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos</b></h3>

                </div>
                <div class="card-body" style="display: block;">
                    <form action="{{url('/ministerios',$ministerio->id)}}" method="post">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Nombre Ministerio</label><b>*</b>
                                            <input type="text" name="nombre_ministerio"
                                                value="{{$ministerio->nombre_ministerio}}" class="form-control" required>
                                            <!--@error('nombre_apellido')
                                                <small style="color: red;">Este Campo es Obligatorio</small>
                                            @enderror-->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Fecha de Ingreso</label><b>*</b>
                                            <input type="date" name="fcha_ingreso" value="{{$ministerio->fcha_ingreso}}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Descripción</label>
                                            <textarea class="form-control" name="descripcion" id="" cols="30"
                                                rows="10">{!!$ministerio->descripcion!!}</textarea>
                                                <script>
                                                    CKEDITOR.replace( 'descripcion' );
                                                </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="{{url('/ministerios')}}" class="btn btn-secondary">Cancelar</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Actualizar Registro</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection