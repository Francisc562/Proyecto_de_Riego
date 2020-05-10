@extends('plantillas.app')

@section('titulo', 'Regar')

@section('contenido')

<div style="padding: 20px;">
        <h1>Riego</h1>
        @include('common.success')
        <hr>
        <a href= "{{ route('irrigation.create') }}" class="btn btn-primary">Agregar</a><br/><br/>



    <table class="table table-bordered">
        <tr>
                    <th>ID</th>
                    <th>Nombre del cultivo</th>
                  
            
            <th width="280px">Acciones</th>
        </tr>
    @foreach ($irrigations as $irrigation)
    <tr>
           <td>{!! $irrigation-> id !!}</td>
           <td>{!! $crop-> name !!}</td>
        
        
        <td>
            
            <a class="btn btn-success" href="{{ route('irrigation.edit',$irrigation->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['irrigation.destroy', $irrigation->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $irrigations->links() !!}
    
    </div>
    

               
@endsection