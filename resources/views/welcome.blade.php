@extends('layouts.app')

@section('content')
{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--<title>Визитки</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<style>--}}
        {{--html, body {--}}
            {{--/*background-color: #133d55;*/--}}
            {{--background: url(https://i.imgur.com/3UqVaiQ.png) left top repeat;--}}

            {{--color: #636b6f;--}}
            {{--font-family: 'Raleway', sans-serif;--}}
            {{--font-weight: 100;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}

        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}

        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}

        {{--.top-right {--}}

            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
            {{--background-image: linear-gradient(to bottom left, #5c5b5b, #ffffff);--}}
            {{--border-radius: 20px;--}}
        {{--}--}}

        {{--.content {--}}

            {{--text-align: center;--}}
        {{--}--}}

        {{--.title {--}}
            {{--background-image: linear-gradient(to bottom left, #5c5b5b, #ffffff);--}}

            {{--border-radius: 20px;--}}
            {{--font-size: 84px;--}}
        {{--}--}}

        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 12px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}

        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#">Brand</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#">Action</a></li>--}}
                        {{--<li><a href="#">Another action</a></li>--}}
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="#">One more separated link</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<form class="navbar-form navbar-left" role="search">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" placeholder="Search">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-default">Submit</button>--}}
            {{--</form>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">Link</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
<div class="jumbotron">
    <div class="paddingss">
        <h1>Генератор визиток</h1>
        <p>Здесь мы создаём <a href="https://ru.wikipedia.org/wiki/Визитная_карточка">визитные карты</a>. Иногда они красивые.
            Чаще всего очень красивые. Мы стараемся :D.
            <small>И, да, это β-версия. Хотя нет, пожалуй даже пре-α.</small> </p>
        <p>
            Создавать макеты визиток еще никогда не было так просто. В отличие от конкурентов, наш онлайн-редактор визиток
            <em>ламповый и уютный</em> и дает больше свободы. </p>
        <p>В редактор встроен механизм работы с картинками, который будет <strong>генерировать изображения</strong> из стока <strong>самостоятельно</strong>.
            Как только макет будет сделан, он будет сохранён в базе данных для дальнейшей работы.</p>
        {{--<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>--}}
        <blockquote class="blockquote-reverse">
            <p>Волчица говорит своим волчатам: «Кусайте, как я», — и этого достаточно; и зайчиха учит зайчат:
                «Удирайте, как я», — и этого тоже достаточно; но человек-то учит детеныша: «Думай, как я», — а это уже преступление.</p>
            <small>Аркадий и Борис Стругацкие, <cite title="Роман Аркадия и Бориса Стругацких, изданный в 1986г. ">Хромая судьба.</cite></small>
        </blockquote>

    </div>
</div>
{{--<div class="flex-center position-ref full-height">--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--Здесь скоро будут визитки--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}
@endsection
{{--</html>--}}

{{--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">--}}
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
{{--<html xmlns="http://www.w3.org/1999/xhtml">--}}
{{--<head>--}}
{{--<meta http-equiv="content-type" content="text/html; charset=utf-8" />--}}
{{--<meta name="description" content="" />--}}
{{--<meta name="keywords" content="" />--}}
{{--<title>ОЛОЛОША TEAM</title>--}}
{{--<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />--}}
{{--<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />--}}
{{--<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />--}}
{{--<script src="{{ asset('/js/jquery-1.6.2.js') }}" type="text/javascript"></script>--}}
{{--<script type="text/javascript">--}}
{{--// return a random integer between 0 and number--}}
{{--function random(number) {--}}

{{--return Math.floor( Math.random()*(number+1) );--}}
{{--};--}}

{{--// show random quote--}}
{{--$(document).ready(function() {--}}

{{--var quotes = $('.quote');--}}
{{--quotes.hide();--}}

{{--var qlen = quotes.length; //document.write( random(qlen-1) );--}}
{{--$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)--}}
{{--});--}}
{{--</script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="wrapper">--}}
{{--<div id="header">--}}
{{--<div id="logo">--}}
{{--<a href="/">ОЛОЛОША</span> <span class="cms">TEAM</span></a>--}}
{{--</div>--}}
{{--<div id="menu">--}}
{{--<ul>--}}
{{--<li class="first active"><a href="/">Главная</a></li>--}}
{{--<li><a href="/services">Услуги</a></li>--}}
{{--<li><a href="/portfolio">Портфолио</a></li>--}}
{{--<li class="last"><a href="/contacts">Контакты</a></li>--}}
{{--</ul>--}}
{{--<br class="clearfix" />--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="page">--}}
{{--<div id="sidebar">--}}
{{--<div class="side-box">--}}
{{--<h3>Случайная цитата</h3>--}}
{{--<p align="justify" class="quote">--}}
{{--«Сайт, как живой организм, изменяется и развивается.--}}
{{--Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»--}}
{{--</p>--}}
{{--<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->--}}
{{--«Все должно быть очень просто, как текстовый файл и при этом функционально--}}
{{--и тогда пользователи от нас уйдут»--}}
{{--</p>--}}
{{--<p align="justify" class="quote">--}}
{{--«Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»--}}
{{--</p>--}}
{{--<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->--}}
{{--«Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»--}}
{{--</p>--}}
{{--<p align="justify" class="quote">--}}
{{--«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как--}}
{{--новичок каждый раз делает шаг в неизвестность»--}}
{{--</p>--}}
{{--</div>--}}
{{--<div class="side-box">--}}
{{--<h3>Основное меню</h3>--}}
{{--<ul class="list">--}}
{{--<li class="first "><a href="/">Главная</a></li>--}}
{{--<li><a href="/services">Услуги</a></li>--}}
{{--<li><a href="/portfolio">Портфолио</a></li>--}}
{{--<li class="last"><a href="/contacts">Контакты</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="content">--}}
{{--<div class="box">--}}
{{--@yield('content')--}}
{{--<!----}}
{{--<h2>Welcome to Accumen</h2>--}}
{{--<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />--}}
{{--<p>--}}
{{--This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)--}}
{{--</p>--}}
{{---->--}}
{{--</div>--}}
{{--<br class="clearfix" />--}}
{{--</div>--}}
{{--<br class="clearfix" />--}}
{{--</div>--}}
{{--<div id="page-bottom">--}}
{{--<div id="page-bottom-sidebar">--}}
{{--<h3>Наши контакты</h3>--}}
{{--<ul class="list">--}}
{{--<li class="first">icq: 199199538</li>--}}
{{--<li>skypeid: vitalyswipe</li>--}}
{{--<li class="last">email: vitalyswipe@gmail.com</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div id="page-bottom-content">--}}
{{--<h3>О Компании</h3>--}}
{{--<p>--}}
{{--Вот дом.--}}
{{--Который построил Джек.--}}

{{--А это пшеница.--}}
{{--Которая в тёмном чулане хранится--}}
{{--В доме,--}}
{{--Который построил Джек.--}}

{{--А это весёлая птица-синица,--}}
{{--Которая ловко ворует пшеницу,--}}
{{--Которая в тёмном чулане хранится--}}
{{--В доме,--}}
{{--Который построил Джек.--}}

{{--Вот кот,--}}
{{--Который пугает и ловит синицу,--}}
{{--Которая ловко ворует пшеницу,--}}
{{--Которая в тёмном чулане хранится--}}
{{--В доме,--}}
{{--Который построил Джек.--}}
{{--</p>--}}
{{--</div>--}}
{{--<br class="clearfix" />--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="footer">--}}
{{--<a href="/">ОЛОЛОША TEAM &copy; 2012</a>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}