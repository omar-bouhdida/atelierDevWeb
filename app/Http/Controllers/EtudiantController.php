<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $liste = Etudiant::orderby('nom','asc')->get();
        return view('etudiant', compact('liste'));
    }

    public function create(){
        $classes=Classe::all();
        return view('create',compact('classes'));
    }

    public function store(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classes_id'=>'required'
        ]);

        Etudiant::create($request->all());

        return redirect()->route('etudiant')
                        ->with('success','Student created Successfully.');
    }
}
