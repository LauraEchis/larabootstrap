<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Визитки', 'Визитки') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    {{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="navbar-header">--}}
    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">--}}
    {{--<span class="sr-only">Меню</span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--<span class="icon-bar"></span>--}}
    {{--</button>--}}
    {{--<a class="navbar-brand" href="#">Визитки</a>--}}
    {{--</div>--}}

    {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">--}}
    {{--<ul class="nav navbar-nav">--}}
    {{--<li class="active"><a href="#">Вариации<span class="sr-only">(current)</span></a></li>--}}
    {{--<li><a href="#">Link</a></li>--}}
    {{--<li class="dropdown">--}}
    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Меню <span class="caret"></span></a>--}}
    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<li><a href="#">О визитках</a></li>--}}
    {{--<li><a href="#">Еще что-то о визитках</a></li>--}}
    {{--<li><a href="#">Больше инфы</a></li>--}}
    {{--<li class="divider"></li>--}}
    {{--<li><a href="#">Ссылка в вики</a></li>--}}
    {{--<li class="divider"></li>--}}
    {{--<li><a href="#">Еще ссылка куда-то</a></li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<form class="navbar-form navbar-left" role="search">--}}
    {{--<div class="form-group">--}}
    {{--<input type="text" class="form-control" placeholder="Поиск">--}}
    {{--</div>--}}
    {{--<button type="submit" class="btn btn-default">Найти</button>--}}
    {{--</form>--}}
    {{--<ul class="nav navbar-nav navbar-right">--}}
    {{--<li><a href="#">Link</a></li>--}}
    {{--@guest--}}
    {{--<li><a href="{{ route('login') }}">Вход</a></li>--}}
    {{--<li><a href="{{ route('register') }}">Регистрация</a></li>--}}
    {{--@else--}}
    {{--<li class="dropdown">--}}
    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--</a>--}}

    {{--<ul class="dropdown-menu" role="menu">--}}
    {{--<li>--}}
    {{--<a href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--document.getElementById('logout-form').submit();">--}}
    {{--Выход--}}
    {{--</a>--}}

    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--{{ csrf_field() }}--}}
    {{--</form>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</li>--}}
    {{--@endguest--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</nav>--}}

    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('Визитки', 'Визитки') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <ul class="nav navbar-nav">
                    &nbsp;
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button" aria-expanded="false">
                            Меню
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('infocard')}}">О визитках</a></li>
                            <li class="divider"></li>
                            <li><a href="https://ru.wikipedia.org/wiki/Визитная_карточка">Ссылка в вики</a></li>
                            <li><a href="https://www.vistaprint.com/">Ссылка на заморские генераторы</a></li>
                        </ul>
                    </li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Поиск">
                        </div>
                        <button type="submit" class="btn btn-default">Найти</button>
                    </form>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Вход</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li>
                                        <a href="{{ route('home') }}">
                                            В личный кабинет
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выход
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
