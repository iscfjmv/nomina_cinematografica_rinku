<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Empleado') }}
            {{ Form::select('idempleado',$empleados, $pago->idempleado, ['class' => 'form-control' . ($errors->has('idempleado') ? ' is-invalid' : ''), 'placeholder' => 'Idempleado']) }}
            {!! $errors->first('idempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sueldo') }}
            {{ Form::select('idsueldo',$sueldos ,$pago->idsueldo, ['class' => 'form-control' . ($errors->has('idsueldo') ? ' is-invalid' : ''), 'placeholder' => 'Idsueldo']) }}
            {!! $errors->first('idsueldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero de Entregas') }}
            {{ Form::text('numeroentregas', $pago->numeroentregas, ['class' => 'form-control' . ($errors->has('numeroentregas') ? ' is-invalid' : ''), 'placeholder' => 'Numeroentregas']) }}
            {!! $errors->first('numeroentregas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mes de Pago') }}
            {{ Form::text('mespago', $pago->mespago, ['class' => 'form-control' . ($errors->has('mespago') ? ' is-invalid' : ''), 'placeholder' => 'Mespago']) }}
            {!! $errors->first('mespago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pago Total') }}
            {{ Form::text('pagototal', $pago->pagototal, ['class' => 'form-control' . ($errors->has('pagototal') ? ' is-invalid' : ''), 'placeholder' => 'Pagototal']) }}
            {!! $errors->first('pagototal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>