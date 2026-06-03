@extends('layouts.app')

@section('content')

<h1>
    Novo Cliente
</h1>

<form action="/clients" method="POST">

    @csrf

    <div class="mb-3">

        <label>
            Nome
        </label>

        <input
            type="text"
            name="name"
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
        ></textarea>

    </div>

    <button
        type="submit"
        class="btn btn-success"
    >

        Salvar

    </button>

</form>

@endsection

