@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar especialidad</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('specialties') }}" class="btn btn-sm btn-darker">
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

        <form action="{{ url('specialties/'.$specialty->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="text-dark">Nombre de la especialidad</label>
                <input type="text" name="name" class="form-control text-default" value="{{ old('name', $specialty->name) }}" required>
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">Descripción</label>
                <input type="text" name="description" class="form-control  text-default" value="{{ old('description', $specialty->description) }}">
            </div>
            <button type="submit" class="btn btn-default">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection
