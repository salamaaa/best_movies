<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular_movies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=e840bff6b3778e58d129bc9384f1c9f5&language=en-US&page=1')
            ->json()['results'];
        $now_playing_movies = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=e840bff6b3778e58d129bc9384f1c9f5&language=en-US&page=1')
            ->json()['results'];
        $popular_genres_array = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=e840bff6b3778e58d129bc9384f1c9f5&language=en-US&page=1')
            ->json()['genres'];
        $popular_genres = collect($popular_genres_array)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        $now_playing_genres_array = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=e840bff6b3778e58d129bc9384f1c9f5&language=en-US&page=1')
            ->json()['genres'];
        $now_playing_genres = collect($now_playing_genres_array)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return view('index', ['popular_movies' => $popular_movies,
            'popular_genres' => $popular_genres,
            'now_playing_movies' => $now_playing_movies,
            'now_playing_genres' => $now_playing_genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $movie = Http::get('https://api.themoviedb.org/3/movie/' .
            $id .
            '?api_key=e840bff6b3778e58d129bc9384f1c9f5&language=en-US&page=1' .
            '&append_to_response=images,videos,credits')
            ->json();

        return view('show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
