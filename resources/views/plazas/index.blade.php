@extends('plantillas.plantilla')

@section('contenido')
<h1>LISTADO DE PLAZAS</h1>
<div class="container">
    <a href="{{ route('plazas.create') }}" class="btn btn-primary mb-3">Agregar Nueva Plaza</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>idPlaza</th>
                <th>NombrePlaza</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plazas as $plaza)
            <tr>
                <td>{{ $plaza->id }}</td>
                <td>{{ $plaza->idPlaza }}</td>
                <td>{{ $plaza->nombrePlaza}}</td>
                <td>
                    <a href="{{ route('plazas.edit', $plaza->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('plazas.destroy', $plaza->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta plaza?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $plazas->links() }}
</div>
@endsection
