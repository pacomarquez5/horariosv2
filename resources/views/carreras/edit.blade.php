@extends('plantillas.plantilla')
@section('contenido')
<h1>EditandoCarreras</h1>
<div class="conteiner" >
    <form action="{{ route('carreras.update', $carrera->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método PUT para actualizar el alumno -->
        <div class="mb-3 row">
            <label for="idCarrera" class="col-4 col-form-label">IdCarrera :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idCarrera" id="idCarrera" placeholder="idCarrera" value="{{ old('idCarrera', $carerra->idCarrera) }}" required />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nombreCarrera" class="col-4 col-form-label">nombreCarrera  :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreCarrera" id="nombreCarrera" placeholder="nombreCarrera" value="{{ old('nombreCarrera', $carrera->nombreCarrera) }}" required />
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombreMediano" class="col-4 col-form-label">nombreMediano :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreMediano" id="nombreMediano" placeholder="Apellido Materno" value="{{ old('nombreMediano', $carrera->nombreMediano) }}" required />
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombreCorto" class="col-4 col-form-label">nombreCorto :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreCorto" id="nombreCorto" placeholder="NombreCorto" value="{{ old('nombreCorto', $carrera->nombreCorto) }}" required />
            </div>
        </div>

        <div class="mb-3 row">
            <label for="idDepto" class="col-4 col-form-label">idDepto :</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idDepto" id="idDepto" placeholder="idDepto" value="{{ old('idDepto', $depto->idDepto) }}" required />
            </div>
        </div>


        <!-- Botón de enviar -->
        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-danger">ACTUALIZAR</button>
            </div>
        </div>
    </form>

</div>


@endsection