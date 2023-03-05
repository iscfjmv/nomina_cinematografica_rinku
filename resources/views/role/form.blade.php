<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrerol') }}
            {{ Form::text('nombrerol', $role->nombrerol, ['class' => 'form-control' . ($errors->has('nombrerol') ? ' is-invalid' : ''), 'placeholder' => 'Nombrerol']) }}
            {!! $errors->first('nombrerol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>