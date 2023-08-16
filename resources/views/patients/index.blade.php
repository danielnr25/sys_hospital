@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Pacientes</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('patients/create') }}" class="btn btn-sm btn-darker">
                    Nuevo paciente
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-success" id="notificacion" role="alert">
            {{ session('notification') }}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-dark text-xs">Nombre</th>
                    <th scope="col" class="text-dark text-xs">E-mail</th>
                    <th scope="col" class="text-dark text-xs">DNI</th>
                    <th scope="col" class="text-dark text-xs">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-default">
                @foreach ($patients as $patient)
                <tr>
                    <th scope="row">
                        {{ $patient->name }}
                    </th>
                    <td>
                        {{ $patient->email }}
                    </td>
                    <td>
                        {{ $patient->dni }}
                    </td>
                    <td>
                        <form action="{{ url('/patients/'.$patient->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ url('/patients/'.$patient->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-body">
        {{ $patients->links() }}
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
