@extends('plantillas.plantilla')

@section('contenido')
<h1>EDITAR ALUMNO</h1>
<div class="container">
    <!-- Formulario para actualizar un alumno -->
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para actualizar el alumno -->

        <!-- Campo para el nombre -->
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Alumno" value="{{ old('nombre', $alumno->nombre) }}" required />
            </div>
        </div>

        <!-- Campo para el apellido paterno -->
        <div class="mb-3 row">
            <label for="apellidoP" class="col-4 col-form-label">Apellido Paterno :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" value="{{ old('apellidoP', $alumno->apellidoP) }}" required />
            </div>
        </div>

        <!-- Campo para el apellido materno -->
        <div class="mb-3 row">
            <label for="apellidoM" class="col-4 col-form-label">Apellido Materno :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidoM" id="apellidoM" placeholder="Apellido Materno" value="{{ old('apellidoM', $alumno->apellidoM) }}" required />
            </div>
        </div>

        <!-- Campo para el email -->
        <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">E-mail :</label>
            <div class="col-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{ old('email', $alumno->email) }}" required />
            </div>
        </div>

        <!-- Campo para el número de control -->
        <div class="mb-3">
            <label for="noctrl" class="col-4 col-form-label">Número de Control:</label>
            <input type="text" name="noctrl" class="form-control" value="{{ old('noctrl', $alumno->noctrl) }}" required>
        </div>

        <!-- Campo para el sexo -->
        <div class="mb-3">
            <label for="sexo" class="col-4 col-form-label">Sexo:</label>
            <select name="sexo" class="form-select" required>
                <option value="">Seleccione el sexo</option>
                <option value="M" {{ old('sexo', $alumno->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('sexo', $alumno->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <!-- Campo para la carrera -->
        <div class="mb-3">
            <label for="carrera_id" class="col-4 col-form-label">Carrera:</label>
            <input type="text" name="carrera_id" class="form-control" value="{{ old('carrera_id', $alumno->carrera_id) }}" required>
        </div>

        <!-- Botón de enviar -->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
        </div>
    </form>
</div>
@endsection
