@extends('layouts.app');

@section('content')
<main>
    <h2 class="text-center mt-4">
        Benvenuto nella pagina articoli
    </h2>

    <div class="d-flex justify-content-center py-4">
        <a class="btn btn-primary" href="{{route('admin.article.create')}}">Aggiungi Nuovo Articolo</a>
    </div>

    <div class="row p-4">
        @foreach ($articles as $article)

            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{$article->image}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>Articolo: <strong>{{$article->article}}</strong></li>
                            <li>Prezzo: {{$article->price}}€</li>
                            <li>Magazzino: {{$article->storage}}ML</li>
                        </ul>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{route('admin.article.show', $article)}}">Dettaglio</a>
                        </div>



                    </div>
                </div>
            </div>




        @endforeach
    </div>
</main>


@endsection