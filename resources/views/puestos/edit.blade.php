@extends('plantillas/plantilla1')


@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
<h1>EDITAR</h1>
    <div class="container">
        <form action="{{  route('puestos.update', $puesto->id)}}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$puesto->nombre}}" placeholder="Nombre del puesto" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="apellidoP" class="col-4 col-form-label">Apellido Paterno :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" value="{{$puesto->apellidoP}}" placeholder="Apellido Paterno" />
                </div>
            </div>
            {{-- <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">E-mail :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="email" id="email" value="{{$puesto->email}}" placeholder="E-mail" />
                </div>
            </div> --}}
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-warning">
                        ACTUALIZAR
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
