<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Best Movies</title>
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex-col md:flex-row flex items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li><a href="/">
                    <svg
                        width="35.000000pt" height="35.000000pt" viewBox="0 0 1280.000000 977.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,977.000000) scale(0.100000,-0.100000)"
                           fill="#ffffff" stroke="none">
                            <path d="M6017 9748 c-8 -13 -202 -383 -432 -823 -230 -440 -422 -806 -428
                            -812 -7 -10 176 -13 910 -13 l919 0 487 829 c268 456 487 832 487 835 0 3
                            -434 6 -965 6 l-965 0 -13 -22z"/>
                            <path d="M8495 8953 c-235 -450 -432 -826 -437 -835 -8 -17 38 -18 894 -18
                            l903 0 485 826 c267 455 487 830 488 835 2 5 -408 9 -951 9 l-954 0 -428 -817z"/>
                            <path d="M11691 9728 c-26 -61 -720 -1567 -737 -1600 l-15 -28 891 0 890 0 0
                            835 0 835 -505 0 -506 0 -18 -42z"/>
                            <path d="M0 8920 l0 -820 2073 0 2072 0 445 812 c245 446 447 815 448 819 2 5
                            -1130 9 -2517 9 l-2521 0 0 -820z"/>
                            <path d="M46 6833 c-3 -82 -9 -1475 -12 -3098 l-6 -2950 20 -87 c39 -162 111
                            -288 231 -409 124 -125 266 -206 451 -257 l95 -27 5540 -3 c4078 -2 5561 0
                            5620 8 399 57 721 341 796 704 18 88 19 201 19 3179 l0 3087 -6374 0 -6373 0
                            -7 -147z m5444 -1946 c78 -25 2048 -929 2225 -1020 296 -153 372 -391 189
                            -587 -96 -103 -29 -70 -2019 -985 -385 -177 -443 -196 -605 -196 -149 1 -246
                            37 -341 128 -63 60 -117 158 -140 253 -11 44 -14 243 -14 1025 0 1062 -2 1018
                            60 1150 76 160 201 248 375 263 96 9 176 0 270 -31z"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="md:ml-16 md:mt-0">
                <a href="" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6 md:mt-0">
                <a href="" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="md:ml-6 md:mt-0">
                <a href="" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <div class="relative">
                <input type="text"
                       class="mt-3 md:mt-0 bg-gray-800 text-sm rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline"
                       placeholder="Search">
                <div class="absolute top-0">
                    <svg viewBox="0 0 24 24"
                         class="fill-current w-4 text-gray-500 mt-2 ml-2">
                        <path class="heroicon-ui"
                              d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
                    </svg>
                </div>
            </div>
            <div class="md:ml-4 mt-3 md:mt-0">
                <a href="">
                    <img src="{{asset('images/avatar.png')}}"
                         alt="User Image"
                         class="rounded-full w-8 h-8">
                </a>
            </div>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
