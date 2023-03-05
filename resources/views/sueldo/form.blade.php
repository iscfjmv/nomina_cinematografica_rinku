<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idrol') }}
            {{ Form::text('idrol', $sueldo->idrol, ['class' => 'form-control' . ($errors->has('idrol') ? ' is-invalid' : ''), 'placeholder' => 'Idrol']) }}
            {!! $errors->first('idrol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sueldobase') }}
            {{ Form::text('sueldobase', $sueldo->sueldobase, ['class' => 'form-control' . ($errors->has('sueldobase') ? ' is-invalid' : ''), 'placeholder' => 'Sueldobase']) }}
            {!! $errors->first('sueldobase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bono') }}
            {{ Form::text('bono', $sueldo->bono, ['class' => 'form-control' . ($errors->has('bono') ? ' is-invalid' : ''), 'placeholder' => 'Bono']) }}
            {!! $errors->first('bono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioentrega') }}
            {{ Form::text('precioentrega', $sueldo->precioentrega, ['class' => 'form-control' . ($errors->has('precioentrega') ? ' is-invalid' : ''), 'placeholder' => 'Precioentrega']) }}
            {!! $errors->first('precioentrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaslaborables') }}
            {{ Form::text('horaslaborables', $sueldo->horaslaborables, ['class' => 'form-control' . ($errors->has('horaslaborables') ? ' is-invalid' : ''), 'placeholder' => 'Horaslaborables']) }}
            {!! $errors->first('horaslaborables', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diaslaborables') }}
            {{ Form::text('diaslaborables', $sueldo->diaslaborables, ['class' => 'form-control' . ($errors->has('diaslaborables') ? ' is-invalid' : ''), 'placeholder' => 'Diaslaborables']) }}
            {!! $errors->first('diaslaborables', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>