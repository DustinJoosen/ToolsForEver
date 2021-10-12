<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Fabriek;
use Illuminate\Http\Request;

class ArtikelenController extends Controller
{

    public function index(){
        return view('artikelen.index',[
            'artikelen' => Artikel::all()
        ]);
    }

    public function create(){
        return view('artikelen.create',[
            'fabrieken' => Fabriek::all()
        ]);
    }

    public function store(Request $request){
		$data = $request->validate([
			'naam' => 'required',
			'fabriek_id' => 'required',
			'type' => 'required',
			'min_aantal' => 'required',
			'inkoop_waarde' => 'required',
			'verkoop_waarde' => 'required',
		]);

        Artikel::create($data);
        return redirect('/artikelen');
    }

    public function edit(Request $request, Artikel $artikel){
        return view('artikelen.edit', [
            'artikel' => $artikel,
            'fabrieken' => Fabriek::all()
        ]);
    }

    public function update(Request $request, Artikel $artikel){
		$data = $request->validate([
			'naam' => 'required',
			'fabriek_id' => 'required',
			'type' => 'required',
			'min_aantal' => 'required',
			'inkoop_waarde' => 'required',
			'verkoop_waarde' => 'required',
		]);

		$artikel->naam = $data["naam"];
		$artikel->fabriek_id = $data["fabriek_id"];
		$artikel->type = $data["type"];
		$artikel->min_aantal = $data["min_aantal"];
		$artikel->inkoop_waarde = $data["inkoop_waarde"];
		$artikel->verkoop_waarde = $data["verkoop_waarde"];

        $artikel->push();
        return redirect('/artikelen');
    }

    public function details(Request $request, Artikel $artikel){
        return view('artikelen.details', [
            'artikel' => $artikel
        ]);
    }

    public function delete(Request $request, Artikel $artikel){
        $artikel->delete();
        return redirect('/artikelen');
    }
}
