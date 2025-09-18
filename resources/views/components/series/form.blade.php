<form action="{{ $action }}" method="post">
    @csrf
    @isset($nome)
    @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
            id="nome"
            name="nome"
            class="form-control"
            value="{{ $nome ?? '' }}"
            placeholder="{{  $placeholder ?? 'Escreva o nome da série'}}">
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>