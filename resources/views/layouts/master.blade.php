<html>
    <!--- Start: Header -->
    <head lang="en">
        <meta name="csrf" content="{{ csrf_token() }}">
        <meta name="locale" content="{{ App::getLocale() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="medical,dental,doctors">
        <meta name="description" content="Prototype for medical website">

        <!--- Bootstrap --->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!--- Owl Carousel --->
        <link href="{{ asset('css/owlcarousel.min.css') }}" rel="stylesheet">

        <!--- Styles --->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <!--- End: Header -->

    <!--- Start: Body -->
    <body>   
        <!--- Start: Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <div class=" d-flex ">
                    <a class="navbar-brand text-white d-flex align-items-center search" href="/">Mediax</a>   
                    <form class="d-flex align-items-center my-2 mx-2 w-100">
                        <input class="form-control me-2 search_input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>             
                </div>

                <div class="ml-auto">
                    <ul class="nav">
                        <li class="text-white cursor-pointer">
                            @auth
                            <span>{{ Auth::user()->name }}</span>
                            <a href="{{ route('auth.logout') }}">Logout</a>
                            @else
                            <a href="{{ route('auth.login') }}">Login</a>
                            @endauth
                        </li>
                        <li class="text-white mx-4 cursor-pointer">Favorite</li>
                        <li class="text-white cursor-pointer">Cart</li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <x-category-nav-component></x-category-nav-component>
        <!--- Start: Navbar -->

        <div class="main-content">
            @yield('content')
        </div>

        <!--- Bootstrap --->
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!--- Whishlist --->
        <script src="{{ asset('js/whishlist.js') }}"></script>

        <!--- Owl Carousel --->
        <script src="{{ asset('js/owlcarousel.min.js') }}"></script>
        <script src="{{ asset('js/owlcarousel.js') }}"></script>
    </body>
    <!--- End: Body -->
</html>