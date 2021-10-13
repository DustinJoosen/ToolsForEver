<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Locatie;
use Illuminate\Http\Request;

class VoorraadController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(){
        return view('voorraad.index',[
            'locaties' => Locatie::all()
        ]);
    }

    public function create(){
        return view('voorraad.create', [
            'locaties' => Locatie::all(),
            'artikels' => Artikel::all()
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'locatie_id' => 'required',
            'artikel_id' => 'required',
            'aantal' => 'required'
        ]);

        $locatie = Locatie::find($data["locatie_id"]);
        $artikel =  Artikel::find($data["artikel_id"]);
        $aantal = $data["aantal"];

        if($locatie->artikelen()->find($artikel) != null)
        {
            $pivot = $locatie->artikelen()->find($artikel)->pivot;
            $pivot->aantal += $aantal;

            if($pivot->aantal < 1){
                $pivot->delete();
            }
            else {
                $pivot->push();
            }
        }
        else{
            $locatie->artikelen()->save($artikel, ["aantal" => $aantal]);
        }

        return redirect('/voorraad');
    }

    public function totaal(){
        $locaties = Locatie::all();

        $totaal_inkoop = 0;
        $totaal_uitkoop = 0;

        foreach($locaties as $locatie){
            $locatie_inkoop = 0;
            $locatie_uitkoop = 0;

            foreach($locatie->artikelen as $artikel){
                $locatie_inkoop += $artikel->inkoop_waarde * $artikel->pivot->aantal;
                $locatie_uitkoop += $artikel->verkoop_waarde * $artikel->pivot->aantal;
            }

            $locatie->waardes = [
                "inkoop" => $locatie_inkoop,
                'verkoop' => $locatie_uitkoop
            ];

            $totaal_inkoop += $locatie_inkoop;
            $totaal_uitkoop += $locatie_uitkoop;
        }

        return view('/voorraad.totaal', [
            'locaties' => $locaties,
            'eindtotaal' => [
                'inkoop' => $totaal_inkoop,
                'uitkoop' => $totaal_uitkoop
            ]
        ]);
    }

    public function bestellijst(){
        return view('/voorraad.bestellijst',[
            'locaties' => Locatie::all()
        ]);
    }
}
