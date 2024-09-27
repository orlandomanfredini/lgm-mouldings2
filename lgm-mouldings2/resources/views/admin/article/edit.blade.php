@extends('layouts.app');

@section('content')

<main>
    <form class="p-5" action="{{route('admin.article.update', $article )}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="article" class="form-label">Nome Articolo</label>
            <input type="text" name="article" class="form-control" id="article"
                placeholder="inserisci il nome dell'articolo..." value="{{ old('article', $article->article) }}">
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Finiture</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="inserisci la finitura..."
                value="{{ old('color', $article->color) }}">
        </div>

        <div class="mb-3">
            <label for="material" class="form-label">Materiale</label>
            <input type="text" name="material" class="form-control" id="material" placeholder="inserisci la finitura..."
                value="{{ old('material', $article->material) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <div class="d-flex justify-content-center">
                <textarea rows="15" cols="80" name="description" id="description" value="{{old('description', $article->description)}}"></textarea>
            </div>

        </div>

        <label for="image" class="form-label">Carica Foto</label>
        <input type="file" class="form-control" id="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
            value="{{old('image', $article->image)}}">


            <label for="price" class="form-label mt-4">Prezzo € </label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" placeholder="Inserisci prezzo"
                value="{{old('price', $article->price)}}">
        </div>


        <label for="storage" class="form-label mt-4">Quantità Magazzino</label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="storage" name="storage" placeholder="Inserisci Quantità..."
                value="{{old('storage', $article->storage)}}">

        </div>




        <div class="d-flex justify-content-center py-3">
            <button class=" btn btn-primary">Salva</button>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


    </form>
</main>

@endsection
