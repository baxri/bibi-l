@extends('layouts.app')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h1 class="header center teal-text text-lighten-2">
                    <div class="avatar">
                        <img width="160" src="me.jpg"/>
                    </div>
                </h1>

                <div class="row center" style="margin-top: -23px;">
                    <h5 class="header col s12 light">
                        Software Developer / Geek / Coder
                    </h5>
                    <p>Favourite person <a target="_blank" style="color: white;"
                                           href="https://www.youtube.com/watch?v=CBi0HUmTrkI">Gordon Goose</a></p>
                </div>
                <div class="row center" style="margin-top: -20px;">
                    <a href="https://www.facebook.com/george.bibilashvili" target="_blank" id="download-button"
                       class="btn-large waves-effect waves-light  light-blue darken-4"><span
                                class="fa fa-facebook fa-lg"></span></a>
                    <a href="https://github.com/baxri" target="_blank" id="download-button"
                       class="btn-large waves-effect waves-light grey darken-2"><span class="fa fa-github fa-lg"></span></a>
                    <a href="https://twitter.com/WbibiG" target="_blank" id="download-button"
                       class="btn-large waves-effect waves-light light-blue accent-3"><span
                                class="fa fa-twitter fa-lg"></span></a>
                    <a href="https://www.linkedin.com/in/giorgi-bibilashvili/" target="_blank"
                       id="download-button" class="btn-large waves-effect waves-light  blue-grey darken-3"><span
                                class="fa fa-linkedin fa-lg"></span></a>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <div class="container-fluid" style="background-color: #ffb300; padding: 6px; color: #ffff;">
        <h5 align="center">Check my ranking: <a style="color: #ffff;" href="https://profile.codersrank.io/user/baxri">here</a>
        </h5>
    </div>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">http</i></h2>
                        <h5 class="center">Server Side API</h5>

                        <p class="light">
                            PHP (6 years, highly proficient), Node JS, Web Sockets,
                            Frameworks: Laravel, Symfony, CodeIgniter, Express.
                            Cms: Joomla.
                            Libraries: PHPUnit, Doctrine, Propel, etc; Social services integration: Facebook, Google+,
                            Twitter;
                            GraphQL (A query language for your API)
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Client-Side Web/Mobile</h5>

                        <p class="light">
                            Web and Native/Hybrid Mobile App development. (ReactNative, ionic)
                            HTML/HTML5 CSS/CSS3.
                            Preprocessor: Less, Sass.
                            JavaScript, NodeJS, Webpack, Gulp, Bower, AJAX Technologies;
                            Templates: Bootstrap, Materialize Frameworks.
                            JS frameworks and libraries: jQuery, ReactJS, VueJS, AngularJS, MooTools;
                            React Native, ionic
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">data_usage</i></h2>
                        <h5 class="center">RDBMS</h5>

                        <p class="light">
                            MySQL (6 years, highly proficient), PostgreSQL, : designing databases, optimizing queries
                            and schemas, stored objects (triggers, views);
                            <br/>NoSQL, MongoDB, Redis: Experience
                            in designing NoSQL database applications with High Performance.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper background-2">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light">
                        I help people to build businesses with a new technologies
                    </h3>
                    <h5> It's so fun and also I'm pretty good at it.</h5>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="background2.jpg" alt="Unsplashed background img 2">

            <!-- <video autoplay muted loop id="myVideo" style="margin-top: -200px;">
                <source src="videos/gordon2.mp4" type="video/mp4">
            </video> -->
        </div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>ABOUT ME</h4>
                    <p class="left-align light">
                        For the past 6 years I've been building server APIS,
                        client side webs, developing application databases, for businesses, NGOs and just for humans :).
                        I've done this as an employee,
                        and a freelancer.
                        I've also worked and working on some very secret projects and big brands.
                        I'd tell you, but then I'd have to kill you...
                        My favorite stacks are: Nginx, PHP7+, MySQL, Laravel, Bootstrap, VueJS, ReactJS, ReactNative.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-container valign-wrapper background-3">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center ">
                    <h4 class="header col s12 light">It's like a my working space :D</h4>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="background3.jpg" alt="Unsplashed background img 3">
        </div>
    </div>
@endsection
