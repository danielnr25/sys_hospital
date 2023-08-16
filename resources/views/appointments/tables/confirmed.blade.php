<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-sm text-dark">Descripción</th>
                <th scope="col" class="text-sm text-dark">Especialidad</th>
                @if ($role == 'patient')
                <th scope="col" class="text-sm text-dark">Médico</th>
                @elseif ($role == 'doctor')
                <th scope="col" class="text-sm text-dark">Paciente</th>
                @endif
                <th scope="col" class="text-sm text-dark">Fecha</th>
                <th scope="col" class="text-sm text-dark">Hora</th>
                <th scope="col" class="text-sm text-dark">Tipo</th>
                <th scope="col" class="text-sm text-dark">Acciones</th>
            </tr>
        </thead>
        <tbody class="text-default">
            @foreach ($confirmedAppointments as $appointment)
            <tr>
                <th scope="row">
                    {{ $appointment->description }}
                </th>
                <td>
                    {{ $appointment->specialty->name }}
                </td>
                @if ($role == 'patient')
                <td>{{ $appointment->doctor->name }}</td>
                @elseif ($role == 'doctor')
                <td>{{ $appointment->patient->name }}</td>
                @endif
                <td>
                    {{ $appointment->scheduled_date }}
                </td>
                <td>
                    {{ $appointment->scheduled_time_12 }}
                </td>
                <td>
                    {{ $appointment->type }}
                </td>
                <td>
                    @if ($role == 'admin')
                    <a class="btn btn-sm btn-primary" title="Ver cita" href="{{ url('/appointments/'.$appointment->id) }}">
                        Ver
                    </a>
                    @endif
                    <a class="btn btn-sm btn-danger" title="Cancelar cita" href="{{ url('/appointments/'.$appointment->id.'/cancel') }}">
                        Cancelar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-body">
    {{ $confirmedAppointments->links() }}
</div>
