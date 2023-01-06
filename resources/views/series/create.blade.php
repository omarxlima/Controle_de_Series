<x-layout title="Nova Série">

    <form action="{{route('series.store') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>
