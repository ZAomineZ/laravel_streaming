@extends('layouts.app')

@section('content')
    <div class="section__filter">
        <div class="container">
            <ul class="reset__block sorting__by">
                <li>
                    <a href="#">Sort By A-Z</a>
                </li>
                <li>
                    <a href="#">Sort By Rating</a>
                </li>
                <li>
                    <a href="#">Sort By Newest Anime</a>
                </li>
            </ul>
            <ul class="reset__block sorting__alphabet">
                <li>
                    <a href="#">ALL</a>
                </li>
                <li>
                    <a href="#">#</a>
                </li>
                <li><a href="#">A</a></li>
                <li><a href="#">B</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">D</a></li>
                <li><a href="#">E</a></li>
                <li><a href="#">F</a></li>
                <li><a href="#">G</a></li>
                <li><a href="#">H</a></li>
                <li><a href="#">J</a></li>
                <li><a href="#">K</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">N</a></li>
                <li><a href="#">O</a></li>
                <li><a href="#">P</a></li>
                <li><a href="#">Q</a></li>
                <li><a href="#">R</a></li>
                <li><a href="#">S</a></li>
                <li><a href="#">T</a></li>
                <li><a href="#">U</a></li>
                <li><a href="#">V</a></li>
                <li><a href="#">W</a></li>
                <li><a href="#">X</a></li>
                <li><a href="#">Y</a></li>
                <li><a href="#">Z</a></li>
            </ul>
        </div>
        <div class="advanced__search">
            <h2 class="search__title">
                Advanced Search
                <i class="fa fa-thin fa-chevron-down"></i>
            </h2>
            <form action="#" class="container form__ui large advanced__search_form">
                <div class="row align_center_x">
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="keywords" placeholder="Search Keywords">
                    </div>
                    <div class="col_12 col_m_6 col_l_4 buttons">
                        <button class="btn secondary rounded large">Reset</button>
                        <input type="submit" value="Search" role="button" class="btn primary rounded large">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container page__content">
        <div class="row">
            @for($i = 0; $i < 16; $i++)
                <div class="col_12 col_m_6 col_l_3 media__block">
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
            @endfor
        </div>
        <ul class="pagination separate">
            <li>
                <a href="#">
                    <i class="fa fa-thin fa-arrow-left"></i>
                </a>
            </li>
            <li class="current">
                <a href="#">
                    01
                </a>
            </li>
            <li>
                <a href="#">
                    02
                </a>
            </li>
            <li>
                <a href="#">
                    03
                </a>
            </li>
            <li>
                <a href="#">
                    04
                </a>
            </li>
            <li>
                <a href="#">
                    05
                </a>
            </li>
            <li>
                <a href="#">
                    06
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-thin fa-arrow-right"></i>
                </a>
            </li>
        </ul>
    </div>
@endsection
