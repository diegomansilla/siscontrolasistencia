@extends('layouts.admin')

@section('content')

<div class="content" style="margin-left: 20px;">
    <h1>Nuevo Miembro</h1><br>

    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <li>{{$error}}</li>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-11">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Datos</b></h3>

                </div>
                <div class="card-body" style="display: block;">
                    <form action="{{url('/miembros')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres y Apellidos</label><b>*</b>
                                            <input type="text" name="nombre_apellido" value="{{old('nombre_apellido')}}" class="form-control" required>
                                            <!--@error('nombre_apellido')
                                                <small style="color: red;">Este Campo es Obligatorio</small>
                                            @enderror-->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Email</label><b>*</b>
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Teléfono</label><b>*</b>
                                            <input type="number" name="telefono" value="{{old('telefono')}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de Nacimiento</label><b>*</b>
                                            <input type="date" name="fcha_nacimiento" value="{{old('fcha_nacimiento')}}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Género</label>
                                            <select name="genero" class="form-control" id="">
                                                <option value="Masculino" {{old('genero')=='Masculino' ? 'selected' : '' }}>Masculino</option>
                                                <option value="Femenino" {{old('genero')=='Femenino' ? 'selected' : '' }}>Femenino</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Ministerio</label><b>*</b>
                                            <input type="text" name="ministerio" value="{{old('ministerio')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dirección</label><b>*</b>
                                            <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="imagen" id="file" class="form-control"><br>
                                    <center><output id="list"></output></center>
                                    <script>
                                        function archivo(evt) {
                                            var files = evt.target.files;
                                            //obtenemos la imagen del campo "file".
                                            for (var i = 0, f; f = files[i]; i++) {
                                                //solo admitimos imagenes.
                                                if (!f.type.match('image.*')) {
                                                    continue;
                                                }
                                                var reader = new FileReader();
                                                reader.onload = (function (theFile) {
                                                    return function (e) {
                                                        //insertamos la imagen
                                                        document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '"width="50%" title="', escape(theFile.name), '"/>'].join('');
                                                    };
                                                })(f);
                                                reader.readAsDataURL(f);
                                            }

                                        }
                                        document.getElementById('file').addEventListener('change', archivo, false);
                                    </script>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar Registro</button>
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