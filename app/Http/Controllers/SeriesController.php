<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "A série {$serie->nome}  foi adicionada com sucesso");
    }

    public function destroy(Serie $series, Request $request)
    {

        $serie = Serie::find($request->series);

        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$series->nome}' foi removida com sucesso");
    }

    public function edit(Serie $series)
    {

        //dd($serie);
        return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series, Request $request)
    {

        //dd($series);

        $series->update($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$series->nome}' foi editada com sucesso");
    }
}
