@extends('plantillas.plantilla')

@section('contenido')
<h1>Crear Nueva Plaza</h1>
<div class="container">
    <form action="{{ route('plazas.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="id" class="col-4 col-form-label">id:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="id" id="id" placeholder="id" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="idPlaza" class="col-4 col-form-label">idPlaza:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idPlaza" id="idPlaza" placeholder="id de la plaza" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombrePlaza" class="col-4 col-form-label">NombrePlaza:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrePlaza" id="nombrePlaza" placeholder="nombrePlaza" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Guardar Plaza</button>
            </div>
        </div>
    </form>
</div>
@endsection
