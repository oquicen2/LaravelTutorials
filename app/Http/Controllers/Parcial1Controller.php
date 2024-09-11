<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fish;
use Illuminate\Support\Facades\DB; 


class Parcial1Controller extends Controller
{
    public function home()
    {
        return view('parcial1.parcial1'); // Apunta a la nueva vista
    }
    public function registerFish()
    {
        return view('parcial1.register-fish');
    }

    // Método para guardar los datos del pez en la tabla 'parcial1'
    public function saveFish(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|in:Sapo Perro,Cabezón',
            'weight' => 'required|numeric|min:0',
        ]);

        // Crear un nuevo pez utilizando los setters
        $fish = new Fish(); // Aquí ahora se reconoce correctamente
        $fish->setName($request->input('name'));
        $fish->setSpecies($request->input('species'));
        $fish->setWeight($request->input('weight'));

        // Guardar el pez en la base de datos
        $fish->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('parcial1.registerFish')->with('success', 'Pez registrado exitosamente.');
    }

    public function listFish()
    {
        // Obtener los peces ordenados por peso
        $fishes = Fish::orderBy('weight', 'asc')->get(); // El modelo Fish debe estar importado

        // Pasar los peces a la vista
        return view('parcial1.list-fish', ['fishes' => $fishes]);
    }

    public function fishStatistics()
    {
        {
            // Contar cuántos peces hay de cada especie
            $speciesCount = Fish::select('species', DB::raw('count(*) as total'))
                                ->groupBy('species')
                                ->get();
    
            // Obtener el peso más grande encontrado en la base de datos
            $maxWeight = Fish::max('weight');
    
            // Pasar las estadísticas a la vista
            return view('parcial1.fish-statistics', [
                'speciesCount' => $speciesCount,
                'maxWeight' => $maxWeight
            ]);
        }
    }


}