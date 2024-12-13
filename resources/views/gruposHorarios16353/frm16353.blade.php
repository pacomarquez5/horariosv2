@extends('plantillas/plantilla')

@section('contenido')
    <div class="container mt-3">

        @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
        @endforeach
        
        @if ($accion == 'C')
        <h1>Insertando</h1>
        <form action="{{ route('grupoHorario16353.store') }}" method="POST">
        @endif

        @if ($accion == 'E')
        <h1>Editando</h1>
        <form action="{{  route('grupoHorario16353.update', $grupoHorario17126->id)  }}" method="POST">
        @method("PUT")
        @endif

        @if ($accion == 'S')
        <h1>Eliminando</h1>
        <form action="{{  route('grupoHorario16353.destroy', $grupoHorario17126->id)  }}" method="POST">
        @method("DELETE")
        @endif

            @csrf
            <div class="mb-3 row">
                <label for="grupo16353_id" class="col-4 col-form-label">Grupo :</label>
                <div class="col-8">
                    <select {{ $des }} name="grupo16353_id" id="grupo16353_id" class="form-control">
                        @foreach ($grupos as $grupo)
                            <option value="{{ $grupo->id }}" {{ isset($grupoHorario16353) && $grupoHorario16353->grupo16353_id == $grupo->id ? 'selected' : '' }}>
                                {{ $grupo->grupo }}
                            </option>
                        @endforeach
                    </select>                
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lugar_id" class="col-4 col-form-label">Lugar :</label>
                <div class="col-8">
                    <select {{ $des }} name="lugar_id" id="lugar_id" class="form-control">
                        @foreach ($lugars as $lugar)
                            <option value="{{ $lugar->id }}" {{ isset($grupoHorario16353) && $grupoHorario16353->lugar_id == $lugar->id ? 'selected' : '' }}>
                                {{ $lugar->nombreLugar }}
                            </option>
                        @endforeach
                    </select>                
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dia" class="col-4 col-form-label">Día :</label>
                <div class="col-8">
                    <select {{$des}} class="form-control" name="dia" id="dia">
                        <option value="">Seleccionar día</option>
                        <option value="Lunes" {{ isset($grupoHorario16353) && $grupoHorario16353->dia == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                        <option value="Martes" {{ isset($grupoHorario16353) && $grupoHorario16353->dia == 'Martes' ? 'selected' : '' }}>Martes</option>
                        <option value="Miércoles"{{isset($grupoHorario16353) && $grupoHorario16353->dia == 'Miércoles' ? 'selected' : '' }}>Miércoles</option>
                        <option value="Jueves" {{ isset($grupoHorario16353) && $grupoHorario16353->dia == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                        <option value="Viernes" {{ isset($grupoHorario16353) && $grupoHorario16353->dia == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                    </select>
                    @error('dia')
                        <p style="color: red">Error en el Día: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="hora" class="col-4 col-form-label">Hora :</label>
                <div class="col-8">
                    <input {{$des}} type="time" class="form-control" name="hora" id="hora" placeholder="Hora :" value="{{@old('hora', $grupoHorario17126->hora)}}" />
                    @error('hora')
                        <p style="color: red">Error en la hora: {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8 d-flex">
                    <button type="submit" class="btn {{ $color }} me-2">
                        {{ $btn }}
                    </button>
                    <a name="" id="" class="btn btn-primary" href="{{ route('grupoHorario16353.index') }}"
                        role="button">REGRESAR</a>
                </div>
            </div>
        </form>
    </div>
@endsection
