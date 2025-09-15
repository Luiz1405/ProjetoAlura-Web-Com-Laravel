<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController 
{
    
    public function index()
    {
        $series = Serie::all();

       return view('series/index', [
        'series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeDaSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeDaSerie;

        $serie->save();

        return redirect('/series');
    }
}