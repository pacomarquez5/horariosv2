@extends('plantillas/plantilla1')


@section('contenido1')
    @include('alumnos/tablahtml')
@endsection

@section('contenido2')
<h1>VER</h1>
    <div class="container">
        <form action="{{  route('alumnos.destroy', $alumno->id)  }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input disabled type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Alumno" value="{{$alumno->nombre}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="apellidoP" class="col-4 col-form-label">Apellido Paterno :</label>
                <div class="col-8">
                    <input disabled type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" value="{{$alumno->apellidoP}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">E-mail :</label>
                <div class="col-8">
                    <input disabled type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="{{$alumno->email}}"/>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                   <button type="submit" class="btn btn-danger">
                        CONFIRMAR PARA ELIMINAR
                    </button>
                    <a href="{{ route("alumnos.index") }}" class="btn btn-primary">REGRESAR</a>
                </div>
            </div>
        </form>
    </div>
@endsection
