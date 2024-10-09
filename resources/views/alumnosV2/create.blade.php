@extends('plantillas/plantilla1')


@section('contenido1')
    @include('alumnos/tablahtml')
@endsection

@section('contenido2')
    <h1>NUEVO</h1>
    <div class="container">

        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach

        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Alumno" value="{{@old('nombre')}}" />
                    @error('nombre')
                        <p style="color: red">Error en el nombre: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="apellidoP" class="col-4 col-form-label">Apellido Paterno :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" value="{{@old('apellidoP')}}" />
                    @error("apellidoP")
                        <p style="color: red">Error en el apellido: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">E-mail :</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{@old('email')}}" />
                    @error("email")
                        <p style="color: red">Error en el email: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        AGREGAR
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
