@extends('admin.dashboard.app')

@section('title', 'Editar categoria')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Categorias</h1>
        <ol class="breadcrumb">
            <li><a href="/admin/index"><i class="fa fa-home"></i>Inicio</a></li>
            <li><a href="/admin/categories">Categorias</a></li>
            <li class="active">Editar categoria</li>
        </ol>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Editar categoria</h3>
                    </div>
                        
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category], 'method'=>'PUT']) !!}
        
                            @include('admin.categories.form')
                    
                            {!! Form::submit('Actualizar', ['class'=>'btn btn-primary'])!!}
                    
                        {!! Form::close() !!}
                    </div>  
                </div>
            </div>
        </div>       
    </section>
</div>
@endsection
