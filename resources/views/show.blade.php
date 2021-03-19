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
            <img src="{{asset('images/movies/medium-cover - Copy.jpg')}}"
                 alt="Movie Image"
                 class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Cherry (2021)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <img class="w-4 h-4" src="{{asset('icons/star.png')}}" alt="liked">
                    <span class="ml-1"> 74%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2021</span>
                    <span class="mx-2">|</span>
                    <span>Crime / Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Cherry drifts from college dropout to army medic in Iraq - anchored only by his true love, Emily.
                    But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to
                    find his place in the world.
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast </h4>
                    <div class="flex mt-4">
                        <div class="mr-6">
                            <div>Kelli Berglund</div>
                            <div class="text-sm text-gray-400">as Madison</div>
                        </div>
                        <div>
                            <div>Ciara Bravo</div>
                            <div class="text-sm text-gray-400">as Emily</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="flex items-center orange text-gray-900 rounded font-semibold px-5 py-4">
                        <img src="{{asset('icons/play.png')}}" class="w-6" alt="play">
                        <span class="ml-2"> Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img class="hover:opacity-70 transition ease-in-out duration-200"
                             src="{{asset('images/movies/cast/1.jpg')}}"
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
                             src="{{asset('images/movies/cast/2.jpg')}}"
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
                             src="{{asset('images/movies/cast/3.jpg')}}"
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
                             src="{{asset('images/movies/cast/4.jpg')}}"
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
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img class="hover:opacity-70 transition ease-in-out duration-200"
                             src="{{asset('images/movies/images/1.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/2.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/3.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/4.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/5.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/6.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/7.jpg')}}" alt="">
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
                             src="{{asset('images/movies/images/8.jpg')}}" alt="">
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
@endsection
