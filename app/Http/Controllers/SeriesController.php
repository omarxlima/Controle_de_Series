<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(Request $request)
    {

        // return $request->method();
        // return $request->input();
        // return redirect('https://google.com');
        // $series = [
        //     'Lost',
        //     'Band of Brothers',
        //     'Breaking Bad',
        //     'The Witcher'
        // ];

        // $html = '<ul>';
        // foreach ($series as $serie) {
        //     $html .= "<li> $serie </li>";
        // }
        // $html .= '</ul>';
        // return $html;

        // return view('listar-series', ['series' => $series]);


        // $series = Serie::all();
        $series = Serie::query()->OrderBy('nome')->get();
        return view('series.index', compact('series'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // $nomeSerie = $request->input('nome');
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // // dd($serie);
        // $serie->save();

        Serie::create($request->all());


        return redirect('series');

        return to_route('series.index');

    }

}
