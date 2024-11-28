@extends('layouts.app')

@section('content')
    <div class="media__section">
        <div class="container">
            <div class="area__head">
                <h2 class="area__title">
                    Top Rated Animes
                </h2>
            </div>
            <div class="slider__animes slider__animes_outer grid__mode">
                <div class="slider__controls">
                    <button type="button" data-controls="prev">
                        <i class="fa fa-thin fa-chevron-left"></i>
                    </button>
                    <button type="button" data-controls="next">
                        <i class="fa fa-thin fa-chevron-right"></i>
                    </button>
                </div>
                <div class="slider__medias">
                    <div class="slider__medias_inner">
                        <div class="slider slider__horizontal slider__body row" data-value-per-slide="5" style="transform: translate3d(0%, 0px, 0px)">
                            @foreach($animeTopRated as $anime)
                                <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                    <a href="{{ route('anime.details', [$anime->slug]) }}" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                                        <i class="fa fa-thin fa-play"></i>
                                    </a>
                                    <div class="info">
                                        <a href="#">
                                            <h3>{{ $anime->title }}</h3>
                                        </a>
                                        <a href="#">
                                            <h4>Launch Date: {{ $anime->year() }}</h4>
                                        </a>
                                    </div>
                                    <a href="#" class="rating">
                                        <span>Rating</span>
                                        {{ $anime->score }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe__banner">
        <div class="container">
            <div class="row align_center_y">
                <div class="col_12 col_m_6 col_l_3">
                    <h2>Subscribe</h2>
                    <p>
                        <strong>To Your Favorite Anime </strong>
                        To Get The Newest Episodes
                    </p>
                </div>
                <div class="col_12 col_m_6 col_l_3 row column__icon">
                    <i class="fa fa-thin fa-user"></i>
                    <span class="step">
                        01
                        <i>step</i>
                    </span>
                    <h3>
                        Signup
                        <span>Create an Account</span>
                    </h3>
                </div>
                <div class="col_12 col_m_6 col_l_3 row column__icon">
                    <i class="fa fa-thin fa-user"></i>
                    <span class="step">
                        02
                        <i>step</i>
                    </span>
                    <h3>
                        Choose
                        <span>Choose your anime</span>
                    </h3>
                </div>
                <div class="col_12 col_m_6 col_l_3 row column__icon">
                    <i class="fa fa-thin fa-user"></i>
                    <span class="step">
                        03
                        <i>step</i>
                    </span>
                    <h3>
                        Subscribe
                        <span>Click to subscribe</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="media__section">
        <div class="container">
            <div class="area__head">
                <h2 class="area__title">
                    Latest Animes
                </h2>
            </div>
            <div class="slider__animes slider__animes_outer grid__mode">
                <div class="slider__controls">
                    <button type="button" data-controls="prev">
                        <i class="fa fa-thin fa-chevron-left"></i>
                    </button>
                    <button type="button" data-controls="next">
                        <i class="fa fa-thin fa-chevron-right"></i>
                    </button>
                </div>
                <div class="slider__medias">
                    <div class="slider__medias_inner">
                        <div class="slider slider__horizontal slider__body row" data-value-per-slide="5" style="transform: translate3d(0%, 0px, 0px)">
                            @foreach($animesLatest as $anime)
                                <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                    <a href="{{ route('anime.details', [$anime->slug]) }}" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                                        <i class="fa fa-thin fa-play"></i>
                                    </a>
                                    <div class="info">
                                        <a href="#">
                                            <h3>{{ $anime->title }}</h3>
                                        </a>
                                        <a href="#">
                                            <h4>Launch Date: {{ $anime->year() }}</h4>
                                        </a>
                                    </div>
                                    <a href="#" class="rating">
                                        <span>Rating</span>
                                        {{ $anime->score }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media__section light__gray">
        <div class="container">
            <div class="area__head">
                <h2 class="area__title">
                    Latest Movies
                </h2>
            </div>
            <div class="slider__animes slider__animes_outer grid__mode">
                <div class="slider__controls">
                    <button type="button" data-controls="prev">
                        <i class="fa fa-thin fa-chevron-left"></i>
                    </button>
                    <button type="button" data-controls="next">
                        <i class="fa fa-thin fa-chevron-right"></i>
                    </button>
                </div>
                <div class="slider__medias">
                    <div class="slider__medias_inner">
                        <div class="slider slider__horizontal slider__body row" data-value-per-slide="5" style="transform: translate3d(0%, 0px, 0px)">
                            @foreach($animeMoviesLatest as $anime)
                                <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                    <a href="{{ route('anime.details', [$anime->slug]) }}" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                                        <i class="fa fa-thin fa-play"></i>
                                    </a>
                                    <div class="info">
                                        <a href="#">
                                            <h3>{{ $anime->title }}</h3>
                                        </a>
                                        <a href="#">
                                            <h4>Launch Date: {{ $anime->year() }}</h4>
                                        </a>
                                    </div>
                                    <a href="#" class="rating">
                                        <span>Rating</span>
                                        {{ $anime->score }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media__section light__gray">
        <div class="container">
            <div class="area__head">
                <h2 class="area__title">
                    Latest Ovas
                </h2>
            </div>
            <div class="slider__animes slider__animes_outer grid__mode">
                <div class="slider__controls">
                    <button type="button" data-controls="prev">
                        <i class="fa fa-thin fa-chevron-left"></i>
                    </button>
                    <button type="button" data-controls="next">
                        <i class="fa fa-thin fa-chevron-right"></i>
                    </button>
                </div>
                <div class="slider__medias">
                    <div class="slider__medias_inner">
                        <div class="slider slider__horizontal slider__body row" data-value-per-slide="5" style="transform: translate3d(0%, 0px, 0px)">
                            @foreach($animeOvaLatest as $anime)
                                <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                    <a href="{{ route('anime.details', [$anime->slug]) }}" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                                        <i class="fa fa-thin fa-play"></i>
                                    </a>
                                    <div class="info">
                                        <a href="#">
                                            <h3>{{ $anime->title }}</h3>
                                        </a>
                                        <a href="#">
                                            <h4>Launch Date: {{ $anime->year() }}</h4>
                                        </a>
                                    </div>
                                    <a href="#" class="rating">
                                        <span>Rating</span>
                                        {{ $anime->score }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
