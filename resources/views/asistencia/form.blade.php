<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fcha_asistencia') }}
            {{ Form::date('fcha_asistencia', $asistencia->fcha_asistencia, ['class' => 'form-control' . ($errors->has('fcha_asistencia') ? ' is-invalid' : ''), 'placeholder' => 'Fcha Asistencia']) }}
            {!! $errors->first('fcha_asistencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('miembro') }}
            {{ Form::select('miembro_id', $miembros, $asistencia->miembro_id, ['class' => 'form-control' . ($errors->has('miembro_id') ? ' is-invalid' : ''), 'placeholder' => 'Miembro']) }}
            {!! $errors->first('miembro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar Asistencia</button>
    </div>
</div>