@extends('layouts.app')

@section('content')
    <div class="section__filter">
        <div class="container">
            <ul class="reset__block sorting__by">
                <li>
                    <a href="{{ route('anime.index', ['sort_title' => 'A-Z']) }}">Sort By A-Z</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort' => 'rating']) }}">Sort By Rating</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort' => 'newest']) }}">Sort By Newest Anime</a>
                </li>
            </ul>
            <ul class="reset__block sorting__alphabet">
                <li>
                    <a href="#">ALL</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort_title' => '#']) }}">#</a>
                </li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'A']) }}">A</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'B']) }}">B</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'C']) }}">C</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'D']) }}">D</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'E']) }}">E</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'F']) }}">F</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'G']) }}">G</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'H']) }}">H</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'J']) }}">J</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'K']) }}">K</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'L']) }}">L</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'M']) }}">M</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'N']) }}">N</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'O']) }}">O</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'P']) }}">P</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Q']) }}">Q</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'R']) }}">R</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'S']) }}">S</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'T']) }}">T</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'U']) }}">U</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'V']) }}">V</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'W']) }}">W</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'X']) }}">X</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Y']) }}">Y</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Z']) }}">Z</a></li>
            </ul>
        </div>
        <div class="advanced__search">
            <h2 class="search__title" id="advanced_search_toggle">
                Advanced Search
                <i class="fa fa-thin fa-chevron-down"></i>
            </h2>
            <form action="#" class="container form__ui large advanced__search_form" id="advanced__search_form">
                <div class="row align_center_x">
                    <div class="col_12 col_m_6 col_l_4">
                        <input type="text" name="search_anime" placeholder="Search Anime (title)">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <select name="format" id="search_type" style="display: none">
                            <option value="">Anime Format</option>
                        </select>
                        <div class="select__custom">
                            <div class="select__custom_option form_control large">Anime Format</div>
                            <i class="select__custom_icon">
                                @include('icons.ArrowDown')
                            </i>
                            <ul class="select__custom_options_list">
                                <li role="button">Tous</li>
                                <li role="button">Movie</li>
                                <li role="button">Ona</li>
                                <li role="button">Ova</li>
                                <li role="button">Special</li>
                                <li role="button">Tv</li>
                                <li role="button">Tv Short</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <select name="status" id="search_type" style="display: none">
                            <option value="">Anime Status</option>
                        </select>
                        <div class="select__custom">
                            <div class="select__custom_option form_control large">Anime Status</div>
                            <i class="select__custom_icon">
                                @include('icons.ArrowDown')
                            </i>
                            <ul class="select__custom_options_list">
                                <li role="button">Tous</li>
                                <li role="button">Terminé</li>
                                <li role="button">En cours</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col_12 col_m_6 col_l_6">
                        <select name="year" id="search_type" style="display: none">
                            <option value="">Anime Years</option>
                        </select>
                        <div class="select__custom">
                            <div class="select__custom_option form_control large">Anime Years</div>
                            <i class="select__custom_icon">
                                @include('icons.ArrowDown')
                            </i>
                            <ul class="select__custom_options_list">
                                @foreach($years as $year)
                                    <li role="button">{{ $year }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col_12 col_m_6 col_l_6">
                        <select name="genre" id="search_type" style="display: none">
                            <option value="">Anime Genres</option>
                        </select>
                        <div class="select__custom">
                            <div class="select__custom_option form_control large">Anime Genres</div>
                            <i class="select__custom_icon">
                                @include('icons.ArrowDown')
                            </i>
                            <ul class="select__custom_options_list">
                                @foreach($genres as $genre)
                                    <li role="button">{{ $genre }}</li>
                                @endforeach
                            </ul>
                        </div>
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
            @foreach($animes as $anime)
                <div class="col_12 col_m_6 col_l_3 media__block">
                    <a href="#" class="image" style="background-image: url('{{ $anime->cover_image }}')">
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
        {{ $animes->links('vendor.pagination.animes-pagination', ['animes' => $animes]) }}
    </div>
@endsection

@section('scripts')
    <script>
        const advancedSearchToggle = document.querySelector('#advanced_search_toggle')
        const form = document.querySelector("#advanced__search_form")
        advancedSearchToggle.addEventListener('click', e => {
            form.classList.toggle('enabled')
        })

        // Event click on select fields
        const selectFields = document.querySelectorAll('.select__custom')
        selectFields.forEach(select => {
            select.addEventListener('click', e => {
                let selectLabel = select.querySelector('.select__custom_option')
                let listOptions = select.querySelector('.select__custom_options_list')
                listOptions.classList.toggle('active')

                // Click event options
                const options = select.querySelectorAll('.select__custom_options_list li')
                options.forEach(option => {
                    let parent = select.parentElement
                    let selectOptionFormParent = parent.querySelector('select option')
                    option.addEventListener('click', e => {
                        selectLabel.innerHTML = option.innerHTML
                        selectOptionFormParent.value = option.innerHTML
                    })
                })
            })
        })
    </script>
@endsection
