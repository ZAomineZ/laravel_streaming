@extends('layouts.app')

@section('content')
    <div class="page__head">
        <h1>{{ $anime->title }}</h1>
        <div class="page__controls">
            @if($episode != 1)
                <a href="{{ route('animes.video', ['slug' => $anime->slug, 'episode' => $episode - 1]) }}" class="btn secondary rounded" role="button">Previous</a>
            @endif
            <span class="btn" role="button">Episode: {{ $episode }}</span>
            @if($episode != $totalEpisodes)
                <a href="{{ route('animes.video', ['slug' => $anime->slug, 'episode' => $episode + 1]) }}" class="btn primary rounded" role="button">Next</a>
            @endif
        </div>
    </div>
    <div class="container page__content">
        <div class="row row__reverse media__player no__gutter">
            <div class="col_12 col_m_8 col_l_9">
                <div class="responsive__element hd__size">
                    <iframe src="{{ \Illuminate\Support\Str::replace(';', '', $anime->episodeCurrent($episode)->video_url) }}" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col_12 col_m_4 col_l_3">
                <div class="episodes__list">
                    <div class="episodes scroll__custom fakeScroll" style="height: 494px">
                        @foreach($anime->episodesList->pluck('episode') as $episode)
                            <a href="{{ route('animes.video', ['slug' => $anime->slug, 'episode' => $episode]) }}">{{ $episode }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="tags">
            <h3 class="area__title">Tags</h3>
            @foreach($anime->genres->pluck('name') as $genre)
                <a href="{{ route('anime.index', ['genre' => $genre]) }}" class="tag__btn">{{ $genre }}</a>
            @endforeach
        </div>
        <div class="area__head">
            <h2 class="area__title">
                Related Animes
            </h2>
        </div>
        <div class="slider__animes grid__mode">
            <div class="slider__medias">
                <div class="slider__medias_inner">
                    <div class="slider slider__horizontal slider__body row">
                        @foreach($animesRelated as $anime)
                            <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                                <a href="{{ route('animes.video', [$anime->slug]) }}" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                                    <i class="fa fa-thin fa-play"></i>
                                </a>
                                <div class="info">
                                    <a href={{ route('animes.video', [$anime->slug]) }}">
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
        <div class="area__head pt_5">
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
@endsection

@section('scripts')
    <script src="{{ asset('js/fakeScroll.js') }}"></script>
    <script>
        let scrollElement = document.querySelector('.scroll__custom')
        scrollElement.fakeScroll();
    </script>
@endsection
