@extends('plantillas.plantilla')

@section('contenido')
<h1>EDITAR PLAZA</h1>
<div class="container">
    <form action="{{ route('plazas.update', $plaza->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campo para el id -->
        <div class="mb-3 row">
            <label for="id" class="col-4 col-form-label">ID: </label>
            <div class="col-8">
                <input type="text" class="form-control" name="id" id="id" placeholder="el id" value="{{ old('id', $plaza->id) }}" required />
            </div>
        </div>

         <!-- Campo para el idPlazA-->
         <div class="mb-3 row">
            <label for="idPlaza" class="col-4 col-form-label">idPlaza : </label>
            <div class="col-8">
        <input type="text" class="form-control" name="idPlaza" id="idPlaza" placeholder="ID" value="{{ old('idPlaza', $plaza->idPlaza) }}" required />
            </div>
        </div>

        <!-- Campo para la ubicación -->
        <div class="mb-3 row">
            <label for="nombrePlaza" class="col-4 col-form-label">NombrePlaza:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrePlaza" id="nombrePlaza" placeholder="Ubicación de la Plaza" value="{{ old('nombrePlaza', $plaza->nombrePlaza) }}" required />
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
