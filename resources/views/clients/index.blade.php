@extends('layouts.app')

@section('content')

<h1 class="mb-4">
    Clientes
</h1>

<a
    href="/clients/create"
    class="btn btn-primary mb-3"
>

    Novo Cliente

</a>

@foreach($clients as $client)

    <div class="card mb-3">

        <div class="card-body">

            <h3>
                {{ $client->name }}
            </h3>

            <p>
                {{ $client->phone }}
            </p>

            <p>
                {{ $client->email }}
            </p>

            <a
                href="/clients/{{ $client->id }}/edit"
                class="btn btn-warning"
            >

                Editar

            </a>

            <form
                action="/clients/{{ $client->id }}"
                method="POST"
                style="display:inline-block;"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="btn btn-danger"
                >

                    Excluir

                </button>

            </form>

        </div>

    </div>

@endforeach

@endsection

