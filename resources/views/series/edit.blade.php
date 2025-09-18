<x-layout title="Editando a série {{ $series->nome }}">
    <x-series.form :action="route('series.update', $series->id) " :nome="$series->nome" />
</x-layout>