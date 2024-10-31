<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $liste = Etudiant::orderBy('nom', 'asc')->get();
        return view('etudiant', compact('liste'));
    }

    public function create()
    {
        $classes = Classe::all();
        return view('create', compact('classes'));
    }

    public function edit(Etudiant $etudiant)
    {
        $classes = Classe::all(); 
        return view('edit', compact('etudiant', 'classes'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required',
            'libelle' => 'required'
        ]);

        $etudiant->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'classe_id' => $request->classe_id
        ]);

        return redirect()->route('etudiant')
                         ->with('success', 'Student updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required' // Corrected 'classes_id' to 'classe_id'
        ]);

        Etudiant::create($request->all());

        return redirect()->route('etudiant.index') // Assumes route name for index is 'etudiant.index'
                         ->with('success', 'Student created successfully.');
    }
}
