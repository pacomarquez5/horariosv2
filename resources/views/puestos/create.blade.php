@extends('plantillas/plantilla1')
@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
<h1>Nuevo</h1>
    <div class="container">
        {{-- aqui los manda a alumnos.store para recibir los datos --}}
        <form action="{{  route('puestos.store')  }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Puesto" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tipo" class="col-4 col-form-label">Tipo :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="TIPO" />
                </div>
            </div>
            {{-- <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">E-mail :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" />
                </di --}}
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Aumentar Participantes
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
