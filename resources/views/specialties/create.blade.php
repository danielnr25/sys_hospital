@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva especialidad</h3>
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
        <div class="alert alert-danger" id="notificacion" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('specialties') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name" class="text-dark">Nombre de la especialidad</label>
                <input type="text" name="name" class="form-control text-default" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="description" class="text-dark">Descripción</label>
                <input type="text" name="description" class="form-control text-default" value="{{ old('description') }}">
            </div>
            <button type="submit" class="btn btn-default">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    setTimeout(function() {
        document.getElementById('notificacion').style.display = 'none';
    }, 2500);
</script>
@endsection
