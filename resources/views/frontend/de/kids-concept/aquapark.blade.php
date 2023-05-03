@extends('frontend.de.layouts.master')

@section('title', 'Aquapark - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-aquapark') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('aquapark') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-aquapark') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-aquapark') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Aquapark Hero -->
<div class="aquaparkHero">
    <figure>
        <img src="{{ asset('assets/frontend/images/aquapark/aquapark.webp') }}" alt="aquaHero"/>
        <span>
            <img style="position:absolute;height: unset;width: unset;right: 0;top: 0;z-index: 1;aspect-ratio: unset" src="{{ asset('assets/frontend/images/aquapark/Palm.svg') }}" alt="palm"/>
        </span>
    </figure>
    <article>
        <h1>Aquapark</h1>
        <span>Der Aquapark mit 18 Wasserrutschen macht glücklich und erreicht einen Rekord, dein Nervenkitzel, zuletzt wirst du vielleicht nass</span>
        <p>Der Aquapark von Port Nature bietet nur Spaß.
            Es gibt Wassersport, eine riesige Wasserrutsche, die 4 Pools für alle und Spaß pur.</p>
    </article>
</div>
<!-- Aquapark Hero End -->
<!-- Gallery -->
<div class="gallery">
    <h2>Galerie</h2>
    <div class="swiper aquaparkSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-1.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-1.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-2.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-3.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <a class="lightbox-aquapark" href="{{ asset('assets/frontend/images/aquapark/aquaSlider-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/aquapark/aquaSlider-4.webp') }}" alt="aquapark"/>
                    </a>
                </figure>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>

<div class="container">
    <div class="aquaIcon">
        <img style="height: unset;width: unset" src="{{ asset('assets/frontend/images/kidsConcept/opaquapark.svg') }}"/>
        <p>18 Rutschen und 4 Pools werden Sie Wasser treffen.</p>
    </div>
</div>
<!-- Gallery End -->
<!-- Video Start -->
<div class="container">
    <div class="aquaparkVideo">
        <!-- Button trigger modal -->
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img style="height: 65px;width: 65px" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="playButton"/>
        </a>
        <img src="{{ asset('assets/frontend/images/aquapark/aquaparkVideo.png') }}" alt="youtubeVideo"/>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="display: flex;justify-content: center;align-items: center">
                    <iframe width="900" height="600" src="https://www.youtube.com/embed/yagCTWz-sjk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <span>Weil du es verdienst.</span>
    </div>
</div>
<!-- Video End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="aquaparkSpecialOffer">
    <h6>Weil du es verdienst.</h6>
    <div class="swiper aquaparkSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>Mini Club</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>SPIEL MASCHINE</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>SPRUNGBAHN</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="aquaparkspecialoffer"/>
                </figure>
                <h5>BABYSITTERSERVICE</h5>
                <div class="backgroundLines">
                        <img class="radialBgImg" src="http://portnature.dgtl.com/assets/frontend/images/radialBg.svg" alt="radialBg" style="visibility: visible;">
                    </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
        </div>
        <div class="swiper-button-next">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>
<!-- Special Offer End -->

<div class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}" alt="pageUp"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/aquapark.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}"></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/aquapark.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>

@endsection