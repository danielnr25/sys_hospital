@extends('layouts.panel')

@section('content')
  <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nuevo paciente</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('patients') }}" class="btn btn-sm btn-darker">
            Cancelar y volver
          </a>
        </div>
      </div>
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ url('patients') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name" class="text-dark">Nombre del paciente</label>
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
        <button type="submit" class="btn btn-default">
          Guardar
        </button>
      </form>
    </div>
  </div>
@endsection
