@extends('layouts.app')

@section('content')
    <div class="section__filter">
        <div class="container">
            <ul class="reset__block sorting__by">
                <li>
                    <a href="{{ route('anime.index', ['sort_title' => 'A-Z']) }}"
                       class="{{ isset($query['sort_title']) && $query['sort_title'] === 'A-Z' ? 'active' : '' }}">Sort By A-Z</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort' => 'rating']) }}"
                         class="{{ isset($query['sort']) && $query['sort'] === 'rating' ? 'active' : '' }}">Sort By Rating</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort' => 'newest']) }}" 
                        class="{{ isset($query['sort']) && $query['sort'] === 'newest' ? 'active' : '' }}">Sort By Newest Anime</a>
                </li>
            </ul>
            <ul class="reset__block sorting__alphabet">
                <li>
                    <a href="#">ALL</a>
                </li>
                <li>
                    <a href="{{ route('anime.index', ['sort_title' => '#']) }}"
                         class="{{ isset($query['sort_title']) && $query['sort_title'] === '#' ? 'active' : '' }}">#</a>
                </li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'A']) }}" class="{{ isset($query['sort_title']) && $query['sort_title'] === '#' ? 'active' : '' }}">A</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'B']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">B</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'C']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">C</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'D']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">D</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'E']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">E</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'F']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">F</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'G']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">G</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'H']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">H</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'J']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">J</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'K']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">K</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'L']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">L</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'M']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">M</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'N']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">N</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'O']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">O</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'P']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">P</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Q']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">Q</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'R']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">R</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'S']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">S</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'T']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">T</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'U']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">U</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'V']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">V</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'W']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">W</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'X']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">X</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Y']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">Y</a></li>
                <li><a href="{{ route('anime.index', ['sort_title' => 'Z']) }}" class="{{ isset($query['sosort_titlert']) && $query['sort_title'] === '#' ? 'active' : '' }}">Z</a></li>
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
                        <input type="text" name="search_anime" placeholder="Search Anime (title)"
                               value="{{ $query['search_anime'] ?? '' }}">
                    </div>
                    <div class="col_12 col_m_6 col_l_4">
                        <select name="format" id="search_type" style="display: none">
                            <option value="{{ $query['format'] ?? '' }}">Anime Format</option>
                        </select>
                        <div class="select__custom">
                            <div
                                class="select__custom_option form_control large">{{ $query['format'] ?? 'Anime Format' }}</div>
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
                            <option value="{{ $query['status'] ?? '' }}">Anime Status</option>
                        </select>
                        <div class="select__custom">
                            <div
                                class="select__custom_option form_control large">{{ $query['status'] ?? 'Anime Status' }}</div>
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
                            <option value="{{ $query['year'] ?? '' }}">Anime Years</option>
                        </select>
                        <div class="select__custom">
                            <div
                                class="select__custom_option form_control large">{{ $query['year'] ?? 'Anime Years' }}</div>
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
                            <option value="{{ $query['genre'] ?? '' }}">Anime Genres</option>
                        </select>
                        <div class="select__custom">
                            <div
                                class="select__custom_option form_control large">{{ $query['genre'] ?? 'Anime Genres' }}</div>
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
                        <input class="btn secondary rounded large" value="Reset" role="button" type="submit"
                               name="reset"/>
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
                    <a href="{{ route('anime.details', [$anime->slug]) }}" class="image"
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
        {{ $animes->withQueryString()->links('vendor.pagination.animes-pagination', ['animes' => $animes]) }}
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
