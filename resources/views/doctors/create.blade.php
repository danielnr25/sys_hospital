@extends('layouts.panel')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo médico</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('doctors') }}" class="btn btn-sm btn-darker">
                    Cancelar y volver
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger" id="notificacion" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('doctors') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="text-dark">Nombre del médico</label>
                <input type="text" name="name" class="form-control text-default" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email" class="text-dark">E-mail</label>
                <input type="text" name="email" class="form-control text-default" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="dni" class="text-dark">DNI</label>
                <input type="text" name="dni" class="form-control text-default" value="{{ old('dni') }}">
            </div>
            <div class="form-group">
                <label for="address" class="text-dark">Dirección</label>
                <input type="text" name="address" class="form-control text-default" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <label for="phone" class="text-dark">Teléfono / móvil</label>
                <input type="text" name="phone" class="form-control text-default" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label for="password" class="text-dark">Contraseña</label>
                <input type="text" name="password" class="form-control text-default" value="{{ str_random(6) }}">
            </div>
            <div class="form-group">
                <label for="specialties" class="text-dark">Especialidades</label>
                <select name="specialties[]" id="specialties" class="form-control selectpicker" data-style="btn-dark" multiple title="Seleccione una o varias">
                    @foreach ($specialties as $specialty)
                    <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-default">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
@endsection

@section('scripts')
<script>
    setTimeout(function() {
        document.getElementById('notificacion').style.display = 'none';
    }, 2500);
</script>
@endsection
