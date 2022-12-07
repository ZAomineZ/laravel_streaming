@extends('layouts.app')

@section('content')
    <div class="page__head">
        <h1>Boruto Naruto Next Generations</h1>
        <div class="page__controls">
            <a href="#" class="btn secondary rounded" role="button">Previous</a>
            <span class="btn" role="button">Episode: 06</span>
            <a href="#" class="btn primary rounded" role="button">Next</a>
        </div>
    </div>
    <div class="container page__content">
        <div class="row row__reverse media__player no__gutter">
            <div class="col_12 col_m_8 col_l_9">
                <div class="responsive__element hd__size">
                    <video poster="{{ asset('img/video-image.png') }}" src="https://www.pstream.net/e/5beJo3pJ6Jgydx7" fullscreen="allow"></video>
                </div>
            </div>
            <div class="col_12 col_m_4 col_l_3">
                <div class="episodes__list">
                    <div class="episodes scroll__custom" style="height: 494px">
                        <div class="scroll__custom_wrap">
                            <div class="scroll__custom_content">
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                                <a href="#">001</a>
                            </div>
                        </div>
                        <div class="scroll__custom_track">
                            <div class="scroll__bar" style="height: 32.8239%; top: 0%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tags">
            <h3 class="area__title">Tags</h3>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
            <a href="#" class="tag__btn">Manga</a>
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
                        <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                            <a href="#" class="image" style="background-image: url('https://phenixthemes.com/frontdemo/animtora/img/image-2.png')">
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
                        <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                            <a href="#" class="image" style="background-image: url('https://phenixthemes.com/frontdemo/animtora/img/image-2.png')">
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
                        <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                            <a href="#" class="image" style="background-image: url('https://phenixthemes.com/frontdemo/animtora/img/image-2.png')">
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
                        <div class="media__block col_12 col_m_6 col_l_3 slider__item">
                            <a href="#" class="image" style="background-image: url('https://phenixthemes.com/frontdemo/animtora/img/image-2.png')">
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
