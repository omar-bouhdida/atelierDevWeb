@extends('layout')

@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="#"> Create New Student</a>
        </div>
    </div>
</div>

<!-- <table class="table table-bordered table-hover">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Bouzaien</td>
        <td>Malek</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Berrima</td>
        <td>Mouheb</td>
    </tr>
</table> -->

<table class="table table-bordered table-hover">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Classe</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($liste as $value)
    <tr>
        <td>{{ $loop->index }}</td>
        <td>{{ $value->nom }}</td>
        <td>{{ $value->prenom }}</td>
        <td>{{ $value->classe ? $value->classe->libelle : 'N/A' }}</td>
        <td>
            <a class="btn btn-info" href="#">Show</a>
            <a class="btn btn-primary" href="{{ route('etudiant.edit', $value->id) }}">Edit</a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </td>
    </tr>
    @endforeach
</table>

@endsection
