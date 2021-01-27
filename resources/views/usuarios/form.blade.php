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

        {!! Form::text('nombre', null, ['class' => 'form-control', 'maxlength' => '70', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('apellido'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('apellido') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Apellido', 'Apellido *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">
        {!! Form::text('apellido', null, ['class' => 'form-control', 'maxlength' => '70', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>



@if($errors->has('ci'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('ci') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Carnet', 'Carnet *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::text('ci', null, ['class' => 'form-control', 'maxlength' => '20', 'required', 'autocomplete'=>'off']) !!}
    </div>
    <br><br>
</div>

@if($errors->has('rol'))
    <div class="form-group has-error">
        <div class="help-block">
            <label class="alert-danger">{{ $errors->first('rol') }}</label>
        </div>
    </div>
@endif
<div class="form-group">
    <div class="col-lg-2">
        {!! Form::label('Rol', 'Rol *:', ['class' => 'control-label']) !!}
    </div>
    <div class="col-lg-8">

        {!! Form::select('rol', \App\Patrones\Fachada::getRoles(),  null, ['class' => 'form-control ',  'name' => 'rol' ,  'id' => 'rol', 'required' ]) !!}
    </div>
    <br><br>
</div>

