<h1>Editar Serviço</h1>

<form action="/services/{{ $service->id }}" method="POST">

    @csrf
    @method('PUT')

    <input
        type="text"
        name="name"
        value="{{ $service->name }}"
    >

    <br><br>

    <textarea
        name="description"
    >{{ $service->description }}</textarea>

    <br><br>

    <input
        type="number"
        step="0.01"
        name="price"
        value="{{ $service->price }}"
    >

    <br><br>

    <input
        type="number"
        name="duration"
        value="{{ $service->duration }}"
    >

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

