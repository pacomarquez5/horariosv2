@extends('plantillas.plantilla')
@section('contenido')
<h1>Carreras</h1>
<div class="container">
    <a href="{{ route('carreras.create') }}" class="btn btn-primary mb-3">Agregar Nueva Carreras</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Idcarrera</th>
                <th>nombrecarrera</th>
                <th>nombreMediano</th>
                <th>nombreCorto</th>
                <th>idDepto</th>
                <th>Acciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($carreras as $carrera)
            <tr>
                <td>{{ $carrera->idcarrera }}</td>
                <td>{{ $carrera->nombreCarrera }}</td>
                <td>{{ $carrera->nombreMediano}}</td>
                <td>{{ $carrera->nombreCorto}}</td>
                <td>{{ $carrera->idDepto}}</td>
                <td>
                    <a href="{{ route('carreras.edit', $carrera->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta carrera?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $carreras->links() }}
</div>

@endsection
