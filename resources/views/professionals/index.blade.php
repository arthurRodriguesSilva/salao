@extends('layouts.app')

@section('content')

<h1 class="mb-4">
    Profissionais
</h1>

<a
    href="/professionals/create"
    class="btn btn-primary mb-3"
>

    Novo Profissional

</a>

@foreach($professionals as $professional)

    <div class="card mb-3">

        <div class="card-body">

            <h3>
                {{ $professional->name }}
            </h3>

            <p>
                {{ $professional->phone }}
            </p>

            <p>
                {{ $professional->specialty }}
            </p>

            <a
                href="/professionals/{{ $professional->id }}/edit"
                class="btn btn-warning"
            >

                Editar

            </a>

            <form
                action="/professionals/{{ $professional->id }}"
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

