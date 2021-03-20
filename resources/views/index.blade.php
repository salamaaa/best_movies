@extends('layouts.main')

@section('content')
    <style>
        .orange {
            color: #ed8936;
        }
    </style>
    <div>
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-lg font-semibold orange">Popular Movies</h2>
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @forelse($popular_movies as $movie)
                        <x-movie-card :movie="$movie" :genres="$popular_genres" />
                    @empty
                        <div class="mt-8">
                            <h3>No Popular Movies Yet!</h3>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="now-playing-movies py-24">
                <h2 class="uppercase tracking-wider text-lg font-semibold orange">Playing Now</h2>
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @forelse($now_playing_movies as $movie)
                       <x-movie-card :movie="$movie" :genres="$now_playing_genres"/>
                    @empty
                        <div class="mt-8">
                            No Playing Now Movies Yet!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
@endsection
