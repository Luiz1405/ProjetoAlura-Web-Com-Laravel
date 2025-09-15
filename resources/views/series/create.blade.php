<x-layout title="Nova Série">

    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da série">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>