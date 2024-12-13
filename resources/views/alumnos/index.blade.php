<!-- resources/views/alumnos/index.blade.php -->
@extends('plantillas.plantilla')

@section('contenido')

    <div class="container mt-4">
        <!-- Mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario para crear/editar alumno -->
        <div class="card-body">
            <form action="{{ isset($alumno) ? route('alumnos.update', $alumno->id) : route('alumnos.store') }}" method="POST">
                @csrf
                @isset($alumno)
                    @method('PUT')
                @endisset

                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" name="id" class="form-control" value="{{ old('id', $alumno->id ?? '') }}" required>
                </div>
        
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $alumno->nombre ?? '') }}" required>
                </div>
        
                <div class="mb-3">
                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" name="apellidoP" class="form-control" value="{{ old('apellidoP', $alumno->apellidoP ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" name="apellidoM" class="form-control" value="{{ old('apellidoM', $alumno->apellidoM ?? '') }}" required>
                </div>
        
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $alumno->email ?? '') }}" required>
                </div>

                 <div class="mb-3">
                    <label for="noctrl" class="form-label">Número de Control</label>
                    <input type="text" name="noctrl" class="form-control" value="{{ old('noctrl', $alumno->noctrl ?? '') }}" required>
                </div>
              
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select name="sexo" class="form-select" required>
                        <option value="">Seleccione el sexo</option>
                        <option value="M" {{ old('sexo', $alumno->sexo ?? '') == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ old('sexo', $alumno->sexo ?? '') == 'F' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="carrera_id" class="form-label">Carrera</label>
                    <input type="text" name="carrera_id" class="form-control" value="{{ old('carrera_id', $alumno->carrera_id ?? '') }}" required>
                </div> 
        
                <button type="submit" class="btn btn-primary">
                    @isset($alumno)
                        Actualizar Alumno
                    @else
                        Crear Alumno
                    @endisset
                </button>
            </form>
        </div>
            
        <!-- Lista de alumnos -->
        <div class="card">
            <div class="card-header">
                Lista de Alumnos
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NoCtrl</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Email</th>
                            <th>sexo</th>
                            <th>Carrera</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->noctrl }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellidoP }}</td>
                                <td>{{ $alumno->apellidoM }}</td>
                                <td>{{ $alumno->email }}</td>
                                <td>{{ $alumno->sexo }}</td>
                                <td>{{ $alumno->carrera_id }}</td>

                                <td>
                                    <!-- Botón Editar -->
                                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a>

                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este alumno?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

