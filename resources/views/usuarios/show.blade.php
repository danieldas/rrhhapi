@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuario
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
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
                <div class="row" style="padding-left: 20px">
                    <div class="form-group">
                        {!! Form::label('cuenta', 'Cuenta:') !!}
                        <p>{{ $usuario->cuenta }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre:') !!}
                        <p>{{ $usuario->nombre }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('apellido', 'Apellido:') !!}
                        <p>{{ $usuario->apellido }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('carnet', 'Carnet:') !!}
                        <p>{{ $usuario->ci }}</p>
                    </div>

                    <div class="form-group">
                        {!! Form::label('rol', 'Rol:') !!}
                        <p>{{ $usuario->rol }}</p>
                    </div>


                    <a href="{{ route('usuarios.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
