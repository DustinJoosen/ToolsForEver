<?php

namespace App\Http\Controllers;

use App\Models\Locatie;
use Illuminate\Http\Request;

class LocatiesController extends Controller
{
   public function __construct()
    {
        $this->middleware("role:admin");
    }


    public function index(){
        return view('locaties.index',[
            'locaties' => Locatie::all()
        ]);
    }

    public function create(){
        return view('locaties.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'stad' => 'required',
            'land' => 'required'
        ]);

        Locatie::create($data);
        return redirect('/locaties');
    }

    public function edit(Request $request, Locatie $locatie){
        return view('locaties.edit', [
            'locatie' => $locatie
        ]);
    }


    public function details(Request $request, Locatie $locatie){
        return view('locaties.details', [
            'locatie' => $locatie
        ]);
    }

    public function update(Request $request, Locatie $locatie){
        $data = $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'stad' => 'required',
            'land' => 'required'
        ]);

        $locatie->naam = $data["naam"];
        $locatie->adres = $data["adres"];
        $locatie->stad = $data["stad"];
        $locatie->land = $data["land"];

        $locatie->push();
        return redirect('/locaties');
    }

    public function delete(Request $request, Locatie $locatie){
        $locatie->delete();
        return redirect('/locaties');
    }}
