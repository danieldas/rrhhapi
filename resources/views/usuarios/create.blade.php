@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @if(session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        @if(session('mensajeRojo'))
            <div class="alert alert-danger">
                {{ session('mensajeRojo') }}
            </div>
        @endif

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'usuarios.store']) !!}

                    @include('usuarios.form')
                    @if($errors->has('password'))
                        <div class="form-group has-error">
                            <div class="help-block">
                                <label class="alert-danger">{{ $errors->first('password') }}</label>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-lg-2">
                            {!! Form::label('Password', 'Password *:', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8">
                            {!! Form::text('password', null, ['class' => 'form-control', 'maxlength' => '70', 'required', 'autocomplete'=>'off']) !!}
                        </div>
                        <br><br>
                    </div>


                    <div class="form-group col-sm-12 text-center">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
