@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
            <h2>Ajouter un Nouvel Étudiant</h2>
            <a class="btn btn-primary" href="{{ route('etudiant') }}">Retour</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a eu des problèmes avec votre saisie. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('etudiant.ajouter') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="nom"><strong>Nom:</strong></label>
                    <input type="text" name="nom" class="form-control" placeholder="Entrez le nom">
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="prenom"><strong>Prénom:</strong></label>
                    <input type="text" name="prenom" class="form-control" placeholder="Entrez le prénom">
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label for="classe_id"><strong>Classe :</strong></label>
                    <select name="classe_id" class="form-control">
                        <option value="" disabled selected>Choisissez une classe</option>
                        @foreach($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center mt-4">
                <button type="submit" class="btn btn-success">Ajouter Étudiant</button>
            </div>
        </div>
    </form>
</div>
@endsection
