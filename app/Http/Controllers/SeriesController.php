<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request){
		
		$series = Serie::query()->orderBy('nome','asc')->get();
		//dd($series);
		$mensagemSucesso = $request->session()->get("mensagem.sucesso");
		
		//$request->session()->forget('mensagem.sucesso');
		
		return view('series.index')->with('series',$series)->with('mensagemSucesso',$mensagemSucesso);
	}
	
	public function create(){
		return view('series.create');
	}
	
	public function store(SeriesFormRequest $request){
		// pega todo mundo do input e ve la na fillable quais pode usar
		
		//$request->validate(['nome'=>['required','min:3'] ]);
		
		$serieNova = Serie::create($request->all());
		
		return to_route('series.index')->with("mensagem.sucesso","Série '{$serieNova->nome}' adicionada com sucesso");

	}
	
	public function edit(Serie $series){
		//$series = Serie::find($series);
		//dd($series);
		return view('series.edit')->with('series',$series);
	}
	
	
	public function update(Serie $series,SeriesFormRequest $request){
		//$series = Serie::find($series);
		//dd($series);
		
		//$request->validate();
		
		$series->nome = $request->nome;
		$series->save();
		//dd($series);
		return to_route(route: 'series.index')->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
	}
	
	public function destroy(int $series){
		$series = Serie::find($series);
	
		$series->delete();
		//$request->session()->flash("mensagem.sucesso","Série '{$series->nome}' removida com sucesso");
		
		return to_route('series.index')->with("mensagem.sucesso","Série '{$series->nome}' removida com sucesso");
	}
	
	public function delete(int $series){
		$series = Serie::find($series);
	
		$series->delete();
		//$request->session()->flash("mensagem.sucesso","Série '{$series->nome}' removida com sucesso");
		
		return to_route('series.index')->with("mensagem.sucesso","Série '{$series->nome}' removida com sucesso");
	}
	
	
}
