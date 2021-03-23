<div class="relative mt-3 md:mt-0" x-data="{isOpen:true}" @click.away="isOpen=false">
    <input type="text"
           class="mt-3 md:mt-0 bg-gray-800 text-sm rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline"
           placeholder="Search"
           wire:model.debounce.200ms="search"
           @focus="isOpen = true"
           @keydown="isOpen = true"
           @keydown.escape.window="isOpen = false"
           @keydown.shift.tab="isOpen = false">
    <div class="absolute top-0">
        <svg viewBox="0 0 24 24"
             class="fill-current w-4 text-gray-500 mt-2 ml-2">
            <path class="heroicon-ui"
                  d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"></path>
        </svg>
    </div>

    <div wire:loading
         class="spinner top-0 right-0 mr-4 mt-4">
    </div>

    @if(Illuminate\Support\Str::length($search) >= 2)
        <div class="z-50 absolute bg-gray-800 rounded w-64 mt-2 text-sm"
             x-show.transition.opacity="isOpen">
            @if($search_results->count() > 0)
                <ul>
                    @foreach($search_results as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{route('movies.show',$result['id'])}}"
                               class="block hover:bg-gray-700 px-3 py-3 flex items-center"
                            @if($loop->last) @keydown.tab="isOpen=false" @endif>
                                @if($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}"
                                         alt="Movie Poster"
                                         class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75"
                                         alt="Movie Poster"
                                         class="w-8">
                                @endif
                                <span class="ml-4">{{$result['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul>
                    <li class="border-b border-gray-700">
                        No Results for {{$search}}
                    </li>
                </ul>
            @endif
        </div>
    @endif
</div>
