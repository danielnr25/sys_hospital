<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-sm text-dark">Especialidad</th>
                <th scope="col" class="text-sm text-dark">Fecha</th>
                <th scope="col" class="text-sm text-dark">Hora</th>
                <th scope="col" class="text-sm text-dark">Estado</th>
                <th scope="col" class="text-sm text-dark">Acciones</th>
            </tr>
        </thead>
        <tbody class="text-default">
            @foreach ($oldAppointments as $appointment)
            <tr>
                <th scope="row">
                    {{ $appointment->specialty->name }}
                    </td>
                <td>
                    {{ $appointment->scheduled_date }}
                </td>
                <td>
                    {{ $appointment->scheduled_time_12 }}
                </td>
                <td>
                    {{ $appointment->status }}
                </td>
                <td>
                    <a href="{{ url('/appointments/'.$appointment->id) }}" class="btn btn-default btn-sm">
                        Ver
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card-body">
    {{ $oldAppointments->links() }}
</div>
