@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="row g-4">
        @forelse ($movies as $movie)
            <div class="col-3">
              <a href="{{route('movies.show', $movie)}}">
                <div class="card p-3">
                  <h3>{{$movie->title}}</h3>
                </div>
              </a>
              
            </div>
        @empty
            No movies found!
        @endforelse
      </div>
    </div>
  </section>
@endsection
