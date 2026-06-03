<h1>Agendamentos</h1>

<a href="/appointments/create">
    Novo Agendamento
</a>

<hr>

@foreach($appointments as $appointment)

    <div
        style="
            border:1px solid #ccc;
            padding:15px;
            margin-bottom:15px;
        "
    >

        <h2>
            {{ $appointment->client->name }}
        </h2>

        <p>
            Profissional:
            {{ $appointment->professional->name }}
        </p>

        <p>
            Data:
            {{ $appointment->appointment_date }}
        </p>

        <p>
            Hora:
            {{ $appointment->start_time }}
        </p>

        <p>
            Status:
            {{ $appointment->status }}
        </p>

    </div>

@endforeach

