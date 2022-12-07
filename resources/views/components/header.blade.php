<div class="home__header">
    <header class="header">
        <div class="container">
            <form action="#" class="form__ui search__box">
                <input type="text" placeholder="Write Search anime...">
                <button class="search__btn">
                    <i class="fa fa-light fa-magnifying-glass"></i>
                </button>
            </form>
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </a>
            <div class="action__btns">
                <div class="dropdown">
                    <a href="#" class="dropdown__btn icon__btn">
                        <i class="fa fa-thin fa-user"></i>
                    </a>
                    <ul class="dropdown__list">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="container navigation__menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
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
    @if(Route::currentRouteName() === "home")
        <div class="container medias__anime_header">
            <h2 class="title__vertical">F e a t u r e d</h2>
            <x-anime.slider-animes :animes="$animes"/>
        </div>
    @endif
</div>
