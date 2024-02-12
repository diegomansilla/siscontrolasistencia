@extends('layouts.admin')

@section('content')

<div class="content" style="margin: 20px;">
    <h1>Bienvenido</h1>
    <br>

    <div class="row">

    <div class="col-lg-3">

            <div class="small-box bg-warning" style="height: 160px;">
                <div class="inner">
                    <?php $contador_de_usuarios = 0; ?>
                    @foreach($usuarios as $usuario)
                    <?php $contador_de_usuarios = $contador_de_usuarios + 1; ?>
                    @endforeach
                    <h3>
                        <?php echo $contador_de_usuarios; ?>
                    </h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="bi bi-building"></i>
                </div>
                <a href="{{url('usuarios')}}" class="small-box-footer" style="margin-top: 15px;">Más Info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3">

            <div class="small-box bg-success" style="height: 160px;">
                <div class="inner">
                    <?php $contador_de_miembros = 0; ?>
                    @foreach($miembros as $miembro)
                    <?php $contador_de_miembros = $contador_de_miembros + 1; ?>
                    @endforeach
                    <h3>
                        <?php echo $contador_de_miembros; ?>
                    </h3>
                    <p>Miembros</p>
                </div>
                <div class="icon">
                    <i class="bi bi-person-add"></i>
                </div>
                <a href="{{url('miembros')}}" class="small-box-footer" style="margin-top: 15px;">Más Info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3">

            <div class="small-box bg-info" style="height: 160px;">
                <div class="inner">
                    <?php $contador_de_ministerio = 0; ?>
                    @foreach($ministerios as $ministerio)
                    <?php $contador_de_ministerio = $contador_de_ministerio + 1; ?>
                    @endforeach
                    <h3>
                        <?php echo $contador_de_ministerio; ?>
                    </h3>
                    <p>Ministerios</p>
                </div>
                <div class="icon">
                    <i class="bi bi-building"></i>
                </div>
                <a href="{{url('ministerios')}}" class="small-box-footer" style="margin-top: 15px;">Más Info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3">

            <div class="small-box bg-primary" style="height: 160px;">
                <div class="inner">
                    <?php $contador_de_asistencia = 0; ?>
                    @foreach($asistencias as $asistencia)
                    <?php $contador_de_asistencia = $contador_de_asistencia + 1; ?>
                    @endforeach
                    <h3>
                        <?php echo $contador_de_asistencia; ?>
                    </h3>
                    <p>asistencias</p>
                </div>
                <div class="icon">
                    <i class="bi bi-list"></i>
                </div>
                <a href="{{url('asistencias')}}" class="small-box-footer" style="margin-top: 15px;">Más Info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection