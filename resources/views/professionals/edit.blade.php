@extends('layouts.app')

@section('content')

<h1>
    Editar Profissional
</h1>

<form
    action="/professionals/{{ $professional->id }}"
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
            value="{{ $professional->name }}"
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
            value="{{ $professional->phone }}"
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
            value="{{ $professional->email }}"
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
            value="{{ $professional->specialty }}"
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
            value="{{ $professional->commission_percentage }}"
            class="form-control"
        >

    </div>

    <button
        type="submit"
        class="btn btn-success"
    >

        Atualizar

    </button>

</form>

@endsection

