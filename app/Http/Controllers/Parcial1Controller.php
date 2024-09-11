<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parcial1Controller extends Controller
{
    public function home()
    {
        return view('parcial1.parcial1');
    }

    public function registerFish()
    {
        return view('parcial1.register-fish');
    }

    public function saveFish(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|in:Sapo Perro,Cabezón',
            'weight' => 'required|numeric|min:0',
        ]);

        $fish = new Fish;
        $fish->setName($request->input('name'));
        $fish->setSpecies($request->input('species'));
        $fish->setWeight($request->input('weight'));

        $fish->save();

        return redirect()->route('parcial1.registerFish')->with('success', 'Pez registrado exitosamente.');
    }

    public function listFish()
    {
        $fishes = Fish::orderBy('weight', 'asc')->get();

        return view('parcial1.list-fish', ['fishes' => $fishes]);
    }

    public function fishStatistics()
    {

        $speciesCount = Fish::select('species', DB::raw('count(*) as total'))
            ->groupBy('species')
            ->get();

        $maxWeight = Fish::max('weight');

        return view('parcial1.fish-statistics', [
            'speciesCount' => $speciesCount,
            'maxWeight' => $maxWeight,
        ]);

    }
}
