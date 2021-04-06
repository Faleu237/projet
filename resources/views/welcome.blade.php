@extends('produit/header')
@section('content')



            {{-- <section class="toto">
            <div class="older">
            <form method="POST" class="links">
                @csrf
                <label >Nom du projet</label>
                <input type="name"  name="nom_produit"><br><br>
                <label> espece</label>
                <input type="name" name="espece_produit"><br><br>
                <input type="submit" value="simuler" />
            </form>
            </div>
            </section>
        </div> --}}
        <div class="container" style="background-image: {{ asset('images/plantain.png') }}">
            <div class="row">
                <div class="col-6">
                    <form action="">
                        <div class="form-group d-flex">
                            <input type="text" name="name" id="" class="form-control" style="margin-right: 10px"
                            placeholder="ex: plantain, maïs, etc."><button class="btn btn-success">rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container my-5" style="font-size: 25px">Les produits les plus consultés</div>
        <div class="container">
            <div class="row">

                @foreach ($produit as $prod)
                <div class="col-md-4">

                    <div class="card mb-5" style="width: 18rem">
                        <img class="card-img-top" src="{{ asset('images/mais.png') }}" alt="une image" srcset="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod ->nom}}</h5>
                            <p class="card-text">{{ $prod ->description}}</p>
                            <a class="btn btn-primary" href="{{ route('produit.show', $prod->id)}}">consulter</a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        @endsection
