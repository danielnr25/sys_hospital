@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Especialidades</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('specialties/create') }}" class="btn btn-sm btn-darker">
                    Nueva especialidad
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-success" role="alert" id="notificacion">
            {{ session('notification') }}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-dark text-xs">Nombre</th>
                    <th scope="col" class="text-dark text-xs">Descripción</th>
                    <th scope="col" class="text-dark text-xs">Opciones</th>
                </tr>
            </thead>
            <tbody class="text-default">
                @foreach ($specialties as $specialty)
                <tr>
                    <th scope="row">
                        {{ $specialty->name }}
                    </th>
                    <td>
                        {{ $specialty->description }}
                    </td>
                    <td>
                        <form action="{{ url('/specialties/'.$specialty->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ url('/specialties/'.$specialty->id.'/edit') }}" class="btn btn-sm btn-success">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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

@section('styles')
<style>
    .btn-success {
        background-color: #2dce8f !important;
    }

    .btn-danger {
        background-color: #f7385e !important;
    }
</style>
@endsection
