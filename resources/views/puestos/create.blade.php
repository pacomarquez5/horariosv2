@extends('plantillas.plantilla')

@section('contenido')
<h1>Crear Nuevo Puesto</h1>

<div class="container">
    <form action="{{ route('puestos.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="idPuesto" class="col-4 col-form-label">idPuesto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="idPuesto" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">nombre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">tipo:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Guardar Puesto</button>
            </div>
        </div>
    </form>
</div>
@endsection
