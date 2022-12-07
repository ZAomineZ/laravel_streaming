@extends('layouts.app')

@section('content')
    <div class="media__details">
        <div class="container page__content">
            <div class="row">
                <div class="sidebar__widget col_12 col_m_4">
                    <a href="{{ route('animes.video', [$anime->slug]) }}" class="poster"
                       style="background-image: url('{{ $anime->cover_image }}')">
                        <i class="fa fa-thin fa-play"></i>
                    </a>
                    <ul class="media__info">
                        <li>
                            Score :
                            <span>{{ $anime->score }}/5</span>
                        </li>
                        <li>
                            Format :
                            <span>{{ $anime->format }}</span>
                        </li>
                        <li>
                            Status :
                            <span>{{ $anime->status }}</span>
                        </li>
                        <li>
                            Episodes :
                            <span>{{ $anime->episodes }}</span>
                        </li>
                        <li>
                            Diffusion :
                            <span>{{ $anime->date() }} - {{ $anime->date('aired_to') }}</span>
                        </li>
                    </ul>
                    <h3 class="area__title">Related Manga</h3>
                    <div class="media__block no__padding">
                        <a href="#" class="image"
                           style="background-image: url('https://phenixthemes.com/frontdemo/animtora/img/image-2.png')">
                            <i class="fa fa-thin fa-play"></i>
                        </a>
                        <div class="info">
                            <a href="#">
                                <h3>One Piece</h3>
                            </a>
                            <a href="#">
                                <h4>Episode: 800</h4>
                            </a>
                        </div>
                        <a href="#" class="rating">
                            <span>Rating</span>
                            9.0
                        </a>
                    </div>
                </div>
                <div class="col_12 col_m_8 col_auto">
                    <div class="media__title">
                        <h1>{{ $anime->title }}</h1>
                        <h3>
                            Anime Status :
                            <span class="secondary__color">{{ $anime->status }}</span>
                        </h3>
                    </div>
                    <div class="media__statistic">
                        <h4>
                            <i class="fa fa-thin fa-backward"></i>
                            {{ $anime->episodes }}
                            <span>Episode’s</span>
                        </h4>
                        <h4>
                            <i class="fa fa-thin fa-star"></i>
                            100
                            <span>Voting</span>
                        </h4>
                        <h4>
                            <i class="fa fa-thin fa-eye"></i>
                            1500
                            <span>Views</span>
                        </h4>
                    </div>
                    <div class="media__story">
                        <h3>The Story Line</h3>
                        <p>
                            {{ $anime->description }}
                        </p>
                    </div>
                    <div class="related__head">
                        <h2 class="area__title">Related Subjects</h2>
                    </div>
                    <div class="slider__animes grid__mode">
                        <div class="slider__medias">
                            <div class="slider__medias_inner">
                                <div class="slider slider__horizontal slider__header row">
                                    @foreach($animesRelated as $anime)
                                        <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                            <a href="#" class="image"
                                               style="background-image: url('{{ $anime->cover_image }}')">
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
                    <div class="tags">
                        <h3 class="area__title">Tags</h3>
                        @foreach($anime->genres->pluck('name') as $genre)
                            <a href="#" class="tag__btn">{{ $genre }}</a>
                        @endforeach
                    </div>
                    <div class="area__head">
                        <h2 class="area__title">
                            Add Comment
                        </h2>
                    </div>
                    <form action="#" class="comments__form form__ui large row">
                        <div class="col_12 col_m_6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col_12 col_m_6">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col_12">
                            <textarea placeholder="Comment"></textarea>
                            <input type="submit" value="Add Comment" class="btn primary rounded large">
                        </div>
                    </form>
                    <ul class="comments__list">
                        <li class="comment__block">
                            <div class="info">
                                <img src="{{ asset('img/avatar.png') }}" alt="">
                                <h3>
                                    Abdullah Ramadan
                                    <span>14:30 | 07/5/2017</span>
                                </h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </li>
                        <li class="comment__block">
                            <div class="info">
                                <img src="{{ asset('img/avatar.png') }}" alt="">
                                <h3>
                                    Abdullah Ramadan
                                    <span>14:30 | 07/5/2017</span>
                                </h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </li>
                        <li class="comment__block">
                            <div class="info">
                                <img src="{{ asset('img/avatar.png') }}" alt="">
                                <h3>
                                    Abdullah Ramadan
                                    <span>14:30 | 07/5/2017</span>
                                </h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </li>
                        <li class="comment__block">
                            <div class="info">
                                <img src="{{ asset('img/avatar.png') }}" alt="">
                                <h3>
                                    Abdullah Ramadan
                                    <span>14:30 | 07/5/2017</span>
                                </h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </li>
                        <li class="comment__block">
                            <div class="info">
                                <img src="{{ asset('img/avatar.png') }}" alt="">
                                <h3>
                                    Abdullah Ramadan
                                    <span>14:30 | 07/5/2017</span>
                                </h3>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
