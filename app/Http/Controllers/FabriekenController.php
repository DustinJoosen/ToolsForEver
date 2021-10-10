<?php

namespace App\Http\Controllers;

use App\Models\Fabriek;
use Illuminate\Http\Request;

class FabriekenController extends Controller
{
    public function index(){
        return view('fabrieken.index',[
            'fabrieken' => Fabriek::all()
        ]);
    }

    public function create(){
        return view('fabrieken.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'email' => 'required',
            'telefoon' => ''
        ]);

        Fabriek::create($data);
        return redirect('/fabrieken');
    }

    public function details(Request $request, Fabriek $fabriek){
        return view('fabrieken.details', [
            'fabriek' => $fabriek
        ]);
    }

    public function edit(Request $request, Fabriek $fabriek){
        return view('fabrieken.edit', [
            'fabriek' => $fabriek
        ]);
    }

    public function update(Request $request, Fabriek $fabriek){
        $data = $request->validate([
            'naam' => 'required',
            'adres' => 'required',
            'email' => 'required',
            'telefoon' => ''
        ]);

        $fabriek->naam = $data["naam"];
        $fabriek->adres = $data["adres"];
        $fabriek->email = $data["email"];
        $fabriek->telefoon = $data["telefoon"];

        $fabriek->push();
        return redirect('/fabrieken');
    }

    public function delete(Request $request, Fabriek $fabriek){
        $fabriek->delete();
        return redirect('/fabrieken');
    }
}
