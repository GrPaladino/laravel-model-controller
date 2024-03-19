@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="col-4">
        <div class="card p-3">
            
            <ul>
                <li><bold>Titolo:</bold> {{$movie->title}}</li>
                <li><bold>Titolo Originale:</bold> {{$movie->original_title}}</li>
                <li><bold>Nazionalitá:</bold> {{$movie->nationality}}</li>
                <li>Data Uscita: {{$movie->date}}</li>
                <li><bold>Voto:</bold> {{$movie->vote}}</li>
            </ul>
      </div>
    </div>
  </section>
@endsection
