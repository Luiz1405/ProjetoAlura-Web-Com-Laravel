<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar nova série</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}

            <div class="d-flex gap-2">
                <a href="{{ route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm">
                    @csrf
                    <i class="bi bi-pencil"></i>
                </a>

                </form>

                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>