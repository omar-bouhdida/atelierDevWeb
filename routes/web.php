<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/etudiant', function () {
    $nom = 'Omar';
    $prenom='BOUHDIDA';
    return view('etudiant',compact('nom','prenom'));
});


