@extends('layouts.app');

@section('content')
<main>
    <h2 class="text-center mt-4">
        Benvenuto nella pagina articoli
    </h2>
    <div class="row p-4">
        @foreach ($articoli as $articolo)

            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{$articolo->image}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>Articolo: <strong>{{$articolo->article}}</strong></li>
                            <li>Prezzo: {{$articolo->price}}€</li>
                            <li>Magazzino: {{$articolo->storage}}ML</li>
                        </ul>

                    </div>
                </div>
            </div>




        @endforeach
    </div>
</main>


@endsection