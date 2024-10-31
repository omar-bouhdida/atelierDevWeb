@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajout nouvel Étudiant</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('etudiant')}}" class="btn btn-primary">
                Back
            </a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whooops!</strong><br>
    <br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('etudiant.update' ,$etudiant->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom :</strong>
                <input type="text" name="nom" value="{{ $etudiant->nom}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom :</strong>
                <input type="text" name="nom" value="{{ $etudiant->prenom}}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Classe :</strong>
                <select name="classe_id" id="from-control">
                    @foreach($classes as $classes)
                    @if($classes->id == $etudiant->classe_id)
                    <option value="{{$classes->id}}" selected>{{$classes->libelle}}</option>
                    @else
                    <option value="{{$classes->id}}">{{$classes->libelle}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
