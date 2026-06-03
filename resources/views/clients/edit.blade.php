@extends('layouts.app')

@section('content')

<h1>
    Editar Cliente
</h1>

<form
    action="/clients/{{ $client->id }}"
    method="POST"
>

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>
            Nome
        </label>

        <input
            type="text"
            name="name"
            value="{{ $client->name }}"
            class="form-control"
        >

    </div>

    <div class="mb-3">

        <label>
            Telefone
        </label>

        <input
            type="text"
            name="phone"
            value="{{ $client->phone }}"
            class="form-control"
        >

    </div>

    <div class="mb-3">

        <label>
            Email
        </label>

        <input
            type="email"
            name="email"
            value="{{ $client->email }}"
            class="form-control"
        >

    </div>

    <div class="mb-3">

        <label>
            Data Nascimento
        </label>

        <input
            type="date"
            name="birth_date"
            value="{{ $client->birth_date }}"
            class="form-control"
        >

    </div>

    <div class="mb-3">

        <label>
            Observações
        </label>

        <textarea
            name="notes"
            class="form-control"
        >{{ $client->notes }}</textarea>

    </div>

    <button
        type="submit"
        class="btn btn-success"
    >

        Atualizar

    </button>

</form>

@endsection

