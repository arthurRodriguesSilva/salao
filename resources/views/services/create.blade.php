<h1>Novo Serviço</h1>

<form action="/services" method="POST">

    @csrf

    <input
        type="text"
        name="name"
        placeholder="Nome"
    >

    <br><br>

    <textarea
        name="description"
        placeholder="Descrição"
    ></textarea>

    <br><br>

    <input
        type="number"
        step="0.01"
        name="price"
        placeholder="Preço"
    >

    <br><br>

    <input
        type="number"
        name="duration"
        placeholder="Duração"
    >

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>

