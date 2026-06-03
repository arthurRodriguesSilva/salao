<h1>Novo Agendamento</h1>

@if(session('error'))

    <div
        style="
            background:red;
            color:white;
            padding:10px;
            margin-bottom:20px;
        "
    >

        {{ session('error') }}

    </div>

@endif

<form action="/appointments" method="POST">

    @csrf

    <label>
        Cliente
    </label>

    <br>

    <select name="client_id">

        @foreach($clients as $client)

            <option value="{{ $client->id }}">
                {{ $client->name }}
            </option>

        @endforeach

    </select>

    <br><br>

    <label>
        Profissional
    </label>

    <br>

    <select name="professional_id">

        @foreach($professionals as $professional)

            <option value="{{ $professional->id }}">
                {{ $professional->name }}
            </option>

        @endforeach

    </select>

    <br><br>

    <input
        type="date"
        name="appointment_date"
    >

    <br><br>

    <input
        type="time"
        name="start_time"
    >

    <br><br>

    <input
        type="time"
        name="end_time"
    >

    <br><br>

    <textarea
        name="notes"
        placeholder="Observações"
    ></textarea>

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

