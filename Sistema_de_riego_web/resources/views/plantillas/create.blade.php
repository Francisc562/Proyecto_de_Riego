@extends('admin.dashboard.app')

@section('title', 'Agregar categoria')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Categorias</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/index"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="/admin/categories">usuarios</a></li>
            <li class="active">Agregar usuarios</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Agregar usuarios</h3>
                    </div>
                        
                    <!-- /.box-header -->
                    <div class="box-body">

                        {!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre de usuarios')!!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
                        </div>                        
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                    </div> 

                     <div class="box-body">

                        {!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Ingrese Contraseña')!!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required'])!!}
                        </div>                        
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                    </div>   
                </div>
            </div>
        </div>       
    </section>
</div>
@endsection
