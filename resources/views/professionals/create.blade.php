@extends('layouts.app')

@section('content')

<h1>
    Novo Profissional
</h1>

<form action="/professionals" method="POST">

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
            Especialidade
        </label>

        <input
            type="text"
            name="specialty"
            class="form-control"
        >

    </div>

    <div class="mb-3">

        <label>
            Comissão %
        </label>

        <input
            type="number"
            name="commission_percentage"
            class="form-control"
        >

    </div>

    <button
        type="submit"
        class="btn btn-success"
    >

        Salvar

    </button>

</form>

@endsection

