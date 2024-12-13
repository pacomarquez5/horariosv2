@extends('plantillas.plantilla')
@section('contenido')
<div class="conteiner" >
    <form action="{{ route('carreras.store') }}" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="idCarrera" class="col-4 col-form-label">idCarrera:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idCarrera" idCarrera="idCarrera" placeholder="idCarrera" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombreCarrera" class="col-4 col-form-label">NombreCarrera:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreCarrera" id="nombreCarrera" placeholder="nombreCarrera" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombreMediano" class="col-4 col-form-label">nombreMediano:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreMediano" id="nombreMediano" placeholder="nombreMediano" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nombreCorto" class="col-4 col-form-label">nombreCorto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreCorto" id="nombreCorto" placeholder="nombreCorto" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="idDepto" class="col-4 col-form-label">idDepto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idDepto" id="idDepto" placeholder="idDepto" required>
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