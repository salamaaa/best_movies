<div class="mt-8">
    <a href="{{route('movies.show',$movie['id'])}}">
        <img class="hover:opacity-70 transition ease-in-out duration-200"
             src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"
             alt="{{$movie['title']}}">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show',$movie['id'])}}" class="text-lg mt-2 hover:text-gray-300">
            {{$movie['title']}}
        </a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
            <span class="ml-1">{{$movie['vote_average']*10}}%</span>
            <span class="mx-2">|</span>
            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach($movie['genre_ids'] as $genre)
                {{$genres->get($genre)}} @if(!$loop->last) , @endif
            @endforeach
        </div>
    </div>
</div>
