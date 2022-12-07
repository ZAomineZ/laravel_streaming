<div class="slider__animes">
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
            <div class="slider slider__horizontal slider__header" data-value-per-slide="6.25" style="transform: translate3d(0%, 0px, 0px)">
                @foreach($animes as $anime)
                    <div class="media__block slider__item">
                        <a href="#" class="image" style="background-image: url('{{ $anime->cover_image }}')">
                            <i class="fa fa-thin fa-play"></i>
                        </a>
                        <div class="info">
                            <a href="#">
                                <h3>{{ $anime->title }}</h3>
                            </a>
                            <a href="#">
                                <h4>Episode: 800</h4>
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
