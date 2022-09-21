{{-- 
    laravelと言うタイトル文字をなくしたいから作成した
    --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
{{-- ここではない --}}
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @if(!Auth::check() && (!isset($authgroup) || !Auth::guard($authgroup)->check()))
        @if (Route::has('login'))
            <li class="nav-item">
                @isset($authgroup)
                <a class="nav-link" href="{{ url("login/$authgroup") }}">{{ __('Login') }}</a>
                @else
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endisset
            </li>
        @endif

        @if (Route::has('register'))
        @isset($authgroup)
        @if (Route::has("$authgroup-register"))
            <li class="nav-item">
                <a class="nav-link" href="{{ route("$authgroup-register") }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @endisset
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @isset($authgroup)
                {{ Auth::guard($authgroup)->user()->name }}
                @else
                {{ Auth::user()->name }}
                @endisset
            </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
