@extends('plantillas.plantilla')

@section('contenido')
<h1>EDITAR PUESTO</h1>
<div class="container">
    <form action="{{ route('puestos.update', $puesto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo para el título del puesto -->
        <div class="mb-3 row">
            <label for="idPuesto" class="col-4 col-form-label">idPuesto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="idPuest" value="{{ old('idPuesto', $puesto->idPuesto) }}" required />
            </div>
        </div>

        <!-- Campo para el departamento -->
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">nombre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" value="{{ old('nombre', $puesto->nombre) }}" required />
            </div>
        </div>

        <!-- Campo para el nivel del puesto -->
        <div class="mb-3 row">
            <label for="nivel" class="col-4 col-form-label">tipo:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo" value="{{ old('tipo', $puesto->tipo) }}" required />
            </div>
        </div>

        <!-- Botón de actualizar -->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
        </div>
    </form>
</div>
@endsection
