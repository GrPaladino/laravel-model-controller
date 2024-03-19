@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">TITOLO</th>
              <th scope="col">TITOLO ORIGINALE</th>
              <th scope="col">DATA USCITA</th>
              <th scope="col">VOTO</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($movies as $movie)
            <tr>
                <th scope="row">
                  <a href="{{route("movies.show", $movie)}}">{{$movie->title}}</a>
                </th>
                <td>{{$movie->original_title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->vote}}</td>
          @empty
              No movies found!
          @endforelse
          </tbody>
        </table>
           
                
                  
                
              
            
      </div>
    </div>
  </section>
@endsection
