<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();

        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $serieAdicionadaComSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index', [
            'series' => $series,
            'mensagemSucesso' => $mensagemSucesso
        ]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {

        $serie = Serie::create($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "A série {$serie->nome}  foi adicionada com sucesso");
    }

    public function destroy(Serie $series, Request $request)
    {

        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$series->nome}' foi removida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$series->nome}' foi editada com sucesso");
    }
}
