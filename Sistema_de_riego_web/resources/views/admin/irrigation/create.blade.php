@extends('plantillas.app')

@section('contenido')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Iniciar Riego</h2>
            </div>
            
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Ups!</strong> a ocurrido un problema.<br><br>
            <ul>
                @foreach ($errors- all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'irrigation.store','method'=>'POST')) !!}
         @include('admin.irrigation.form')
    {!! Form::close() !!}


@endsection