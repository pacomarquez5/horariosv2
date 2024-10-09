@extends('plantillas/plantilla1')


@section('contenido1')
    @include('alumnos/tablahtml')
@endsection

@section('contenido2')
    
    <div class="container">

        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
        
        @if ($accion == 'C')
        <h1>Insertando FRM</h1>
        <form action="{{ route('alumnos.store') }}" method="POST">
        @endif

        @if ($accion == 'E')
        <h1>Editando</h1>
        <form action="{{  route('alumnos.update', $alumno->id)  }}" method="POST">
        @endif

        @if ($accion == 'S')
        <h1>Eliminando</h1>
        <form action="{{  route('alumnos.destroy', $alumno->id)  }}" method="POST">
        @endif

            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input {{$des}} type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Alumno" value="{{@old('nombre', $alumno->nombre)}}" />
                    @error('nombre')
                        <p style="color: red">Error en el nombre: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="apellidoP" class="col-4 col-form-label">Apellido Paterno :</label>
                <div class="col-8">
                    <input {{$des}} type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" value="{{@old('apellidoP', $alumno->apellidoP)}}" />
                    @error("apellidoP")
                        <p style="color: red">Error en el apellido: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">E-mail :</label>
                <div class="col-8">
                    <input {{$des}} type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{@old('email', $alumno->email)}}" />
                    @error("email")
                        <p style="color: red">Error en el email: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn {{$color}}">
                        {{$btn}}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
