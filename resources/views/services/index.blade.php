@extends('layouts.app')

@section('content')

<h1>Serviços</h1>

<a href="/services/create" class="btn btn-primary mb-3">
    Novo Serviço
</a>

<hr>

@foreach($services as $service)

    <div class="card mb-3">

        <div class="card-body">

            <h2>
                {{ $service->name }}
            </h2>

            <p>
                {{ $service->description }}
            </p>

            <p>
                R$ {{ $service->price }}
            </p>

            <p>
                {{ $service->duration }} min
            </p>

            <a
                href="/services/{{ $service->id }}/edit"
                class="btn btn-warning"
            >

                Editar

            </a>

            <form
                action="/services/{{ $service->id }}"
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

