@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Autor
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
                    {!! Form::open(['route' => 'autores.store']) !!}

                    @include('autores.form')

                    <div class="form-group col-sm-12 text-center">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('autores.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
