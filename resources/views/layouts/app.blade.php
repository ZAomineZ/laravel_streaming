<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streaming website</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="home__header">
        <header class="header">
            <div class="container">
                <form action="#" class="form__ui search__box">
                    <input type="text" placeholder="Write Search anime...">
                    <button class="search__btn">
                        <i class="fa fa-light fa-magnifying-glass"></i>
                    </button>
                </form>
                <a href="#" class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </a>
                <div class="action__btns">
                    <div class="dropdown">
                        <a href="#" class="dropdown__btn icon__btn">
                            <i class="fa fa-thin fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container navigation__menu">
                <ul>
                    <li>
                        <a href="#">
                            Home Page
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Online Anime
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Anime Ovas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Online Movies
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="container medias__anime_header">
            <h2 class="title__vertical">F e a t u r e d</h2>
            <div class="slider__animes">
                <div class="slider__medias">
                    <div class="slider__medias_inner">
                        <div class="slider slider__horizontal slider__header">
                            <div class="media__block slider__item">
                                <a href="#"></a>
                                <div class="info"></div>
                                <a href="#" class="rating"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
