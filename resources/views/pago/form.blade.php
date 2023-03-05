<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idempleado') }}
            {{ Form::text('idempleado', $pago->idempleado, ['class' => 'form-control' . ($errors->has('idempleado') ? ' is-invalid' : ''), 'placeholder' => 'Idempleado']) }}
            {!! $errors->first('idempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idsueldo') }}
            {{ Form::text('idsueldo', $pago->idsueldo, ['class' => 'form-control' . ($errors->has('idsueldo') ? ' is-invalid' : ''), 'placeholder' => 'Idsueldo']) }}
            {!! $errors->first('idsueldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numeroentregas') }}
            {{ Form::text('numeroentregas', $pago->numeroentregas, ['class' => 'form-control' . ($errors->has('numeroentregas') ? ' is-invalid' : ''), 'placeholder' => 'Numeroentregas']) }}
            {!! $errors->first('numeroentregas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagototal') }}
            {{ Form::text('pagototal', $pago->pagototal, ['class' => 'form-control' . ($errors->has('pagototal') ? ' is-invalid' : ''), 'placeholder' => 'Pagototal']) }}
            {!! $errors->first('pagototal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>