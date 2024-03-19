@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="col-3">
        <div class="card p-3">
            <h3>Titolo: {{$movie->title}}</h3>
            <p>Titolo Originale: {{$movie->original_title}}</p>
            <p>Nazionalitá: {{$movie->nationality}}</p>
            <p>Data di uscita: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
          </div>
      </div>
    </div>
  </section>
@endsection
