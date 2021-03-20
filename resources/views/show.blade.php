@extends('layouts.main')

@section('content')
    <style>
        .orange {
            background-color: #ed8936;
        }

        .orange-500 {
            background-color: #dd6b20;
        }
    </style>
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"
                 alt="{{$movie['title']}}"
                 class="w-64 lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                    <span class="ml-1"> {{$movie['vote_average']*10}}%</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach($movie['genres'] as $genre)
                            {{$genre['name']}} @if(!$loop->last) , @endif
                        @endforeach
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{$movie['overview']}}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast </h4>
                    <div class="flex mt-4">
                        <div class="mr-8">
                            @forelse($movie['credits']['crew'] as $crew)
                                @if($loop->index < 2)
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                @endif
                            @empty
                                <div>No Cast Found!</div>
                            @endforelse
                        </div>
                    </div>
                </div>
                @if(count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}"
                           class="flex inline-flex items-center orange text-gray-900 rounded font-semibold px-5 py-4">
                            <img src="{{asset('icons/play.png')}}" class="w-6" alt="play">
                            <span class="ml-2"> Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @forelse($movie['credits']['cast'] as $cast)
                    @if($loop->index < 4)
                        <div class="mt-8">
                            <a href="">
                                <img class="hover:opacity-70 transition ease-in-out duration-200"
                                     src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}"
                                     alt="">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray-300">
                                    {{$cast['name']}}
                                </a>
                                <div class="text-sm text-gray-400">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="mt-8">No Cast Found!</div>
                @endforelse

            </div>
        </div>
    </div>
@endsection
