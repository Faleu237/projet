@extends('produit/header')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <p style="font-size: 40px">Fiche technique</p>

            <div class="container" style="margin-left: 100px">
                <p>Nom: {{ $produit->nom }}</p>
                <p>Description: {{ $produit->description }}</p>

                @if ($produit->espece_id== 2)
                <p>Espece: Vegetale</p>
                @else

                <p>Espece: Animale</p>
                @endif
            </div>
            <div class="container">
                <div class="row">

                    @foreach ($produit->fournisseur as $fournisseur)
                    @endforeach
                    <div class="col-6">
                        <p style="font-size: 30px">Fournisseur</p>
                        <p>nom: {{ $fournisseur->nom }}</p>
                        <p>Ville: {{ $fournisseur->ville }}</p>
                        <p>telephone: {{ $fournisseur->telephone }}</p>
                    </div>

                    <div class="col-6">
                        <p style="font-size: 30px">Formateur</p>
                        <p>nom: Madamo</p>
                        <p>Ville: Douala</p>
                        <p>telephone: 34567667</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
