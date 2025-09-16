<x-layout title="Editando a série">

    <form action="{{ route('series.update', $series->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{$series->nome }}">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>

    </form>

</x-layout>