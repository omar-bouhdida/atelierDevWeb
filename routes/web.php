<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/etudiant', function () {
//     $nom = 'Omar';
//     $prenom='BOUHDIDA';
//     return view('etudiant',compact('nom','prenom'));
// });

// Route::get('/etudiant', [EtudiantController::class,"index"]);
Route::get('/etudiant', [EtudiantController::class,"index"])->name('etudiant');
Route::get('/create', [EtudiantController::class,"create"])->name('etudiant.create');
Route::post('/create', [EtudiantController::class,"store"])->name('etudiant.ajouter');