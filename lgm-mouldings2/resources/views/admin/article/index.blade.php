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

            <div class="col-4 g-3">
                <div class="card d-flex justify-content-center">
                    <div class="card-header">
                        <div>Articolo: <strong>{{$article->article}}</strong></div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">

                            <img src="{{$article->image}}" alt="">


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