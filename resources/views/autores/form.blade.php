@if($errors->has('nombre'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('nombre') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Nombre', 'Nombre *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => '100', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>


