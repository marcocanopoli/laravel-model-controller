@extends('layouts.template')
@section('page-title', 'Home')
@section('main-content')
    <section class="movies">
        @foreach ($allMovies as $movie)
        <div class="card">
            <h2><span>Title: </span>{{ $movie->title }}</h2>
            <h3><span>Original title: </span>{{ $movie->original_title }}</h3>
            <h4><span>Country: </span>{{ $movie->nationality }}</h4>
            <span><span>Release date: </span>{{ $movie->date }}</span>
            <span><span>Rating: </span>{{ $movie->vote }}</span>
        </div>
        @endforeach
    </section>
@endsection