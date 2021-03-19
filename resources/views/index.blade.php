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
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (1) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (2) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (3) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (4) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (5) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (6) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (7) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="">
                            <img class="hover:opacity-70 transition ease-in-out duration-200"
                                 src="{{asset('images/movies/medium-cover (8) - Copy.jpg')}}"
                                 alt="">
                        </a>
                        <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray-300">
                                Zack Snyder's Justice League
                            </a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                <span class="ml-1"> 78%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2021</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action / Adventure / Fantasy / Sci-Fi
                            </div>
                        </div>
                    </div>

                </div>
                <div class="now-playing-movies py-24">
                    <h2 class="uppercase tracking-wider text-lg font-semibold orange">Playing Now</h2>
                    <div class="grid grid-cols-1  gap-8">
                        <div class="mt-8">
                            <a href="">
                                <img class="hover:opacity-70 transition ease-in-out duration-200"
                                     src="{{asset('images/movies/medium-cover (1) - Copy.jpg')}}" alt="">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray-300">
                                    Zack Snyder's Justice League
                                </a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                                    <span class="ml-1"> 78%</span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20, 2021</span>
                                </div>
                                <div class="text-gray-400 text-sm">
                                    Action / Adventure / Fantasy / Sci-Fi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
