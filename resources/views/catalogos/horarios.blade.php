@extends('plantillas.plantilla')

@section('contenido')
    <div class="list-group list-group-horizontal d-flex p-3">
        <a href="{{route('grupos.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Grupos</a>
        <a href="{{route('grupoHorarios.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Grupos Horarios</a>
        <a href="{{route('materiasa.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Materias abiertas</a>


    </div>
@endsection
