<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BIBI.ge - Web developer</title>

    <!-- CSS  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="public/css/libs//materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="public/css/libs/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="public/css/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<div id="app">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">
                <img src="html.jpg" height="25">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="javascrit:void(0)">Mob: +995 598 60 20 84</a></li>
                <li><a href="javascrit:void(0)">Email: giorgi.bibiashvili89@gmail.com</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer class="page-footer blue-grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Personal Information</h5>
                    <p class="grey-text text-lighten-4">
                        I am 28 years old, was born in Georgia/Tbilisi 1989. Ended public school in 2006 and
                        started to study in Tbilisi State University on Finances.
                        But then I guess that finances was not a thing that I was intersted in, I was needed something
                        magical and started codding... thats all, I am codding now :)
                    </p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Laravel</a></li>
                        <li><a class="white-text" href="#!">PHP</a></li>
                        <li><a class="white-text" href="#!">GraphQL</a></li>
                        <li><a class="white-text" href="#!">NodeJS</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Javascript</a></li>
                        <li><a class="white-text" href="#!">HTML/CSS</a></li>
                        <li><a class="white-text" href="#!">ReactNative</a></li>
                        <li><a class="white-text" href="#!">SASS/LESS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="https://www.linkedin.com/in/giorgi-bibilashvili-1b620761/">BIBI</a>
            </div>
        </div>
    </footer>
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="public/js/libs/materialize.js"></script>
<script src="public/js/libs/init.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
