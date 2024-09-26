@extends('layouts.app');

@section('content')
<main>
    <h2 class="text-center mt-4">
        Pagina articolo <strong class="text-danger">{{$article->article}}</strong>
    </h2>
    <div class="conatiner">
        <div class="row p-5">
            <div class="card">
                <div class="card-header text-center">
                    Artcolo: <strong class="text-danger">{{$article->article}}</strong>
                    <div class="mt.2"><strong>{{$article->color}}</strong></div>
                </div>
                <div class="card-body ">
                    <ul class="list-unstyled d-flex justify-content-center gap-4">
                        <li class="col-3 text-center">
                            Magazzino: <strong>{{$article->storage}}</strong> ML
                        </li>
                        <li class="col-3 text-center">Legno: <strong>{{$article->material}}</strong></li>
                        <li class="col-3 text-center">Prezzo: <strong>{{$article->price}}</strong>€</li>
                    </ul>

                    <div class="d-flex justify-content-center gap-4">
                        <a class=" btn btn-warning" href="">Modifica Articolo</a>
                        <a class="btn btn-danger" href="">Elimina Articolo</a>
                    </div>


                </div>
            </div>
        </div>
    </div>

</main>

@endsection