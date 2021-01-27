@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Autor</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('autores.create') }}">Agregar autor</a>
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
                    <div class="col-sm-12">
                        {!! Form::open(['route' => 'autores.index', 'method'=>'get']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('buscar', 'Filtro:') !!}
                            {!! Form::text('buscar', old('', Request::input('buscar')), [
                                            'class' => 'form-control ',
                                            'placeholder' => 'Buscar por Nombre...',
                                            'autocomplete'=>'off'
                                            ]) !!}
                        </div>


                        <div class="form-group col-sm-2" style="margin-top: 25px">
                            <button type="submit" class="btn btn-success" title="Buscar"><i class="glyphicon glyphicon-search"></i>

                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @include('autores.table')
            </div>
        </div>
        <div class="text-center">
            {!! $autores->appends([
                    'buscar' => Request::input('buscar')
                    ])->links() !!}
        </div>
    </div>
@endsection

