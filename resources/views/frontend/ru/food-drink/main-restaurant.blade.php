@extends('frontend.ru.layouts.master')

@section('title', 'Главный ресторан - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-main-restaurant') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('main-restaurant') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-main-restaurant') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-main-restaurant') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="mainHeader">
    <div class="row">
        <div class="col-lg-6">
            <div class="swiper mainRestSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-mainRestaurant" href="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurant-1.webp') }}" alt="mainrest"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 video">

            <!-- Button trigger modal -->
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal"
               data-bs-target=".restaurantModalDesktop">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurantVideo.webp') }}" alt="youtubeVideo"/>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="modelvideo" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="display: flex;justify-content: center;align-items: center">
                        <iframe width="900" height="600" src="https://www.youtube.com/embed/E9L6eL0xcu0"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="restaurantInfo">
    <div class="hours">
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>07:00 - 11:00</span>
        </div>
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>12:30 - 15:00</span>
        </div>
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
            <span>18:30 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Главный ресторан</h1>
        <p>Мы предлагаем широкий выбор аппетитных блюд, которые удовлетворят вкус каждого гостя, от пикантного мяса до свежих салатов на любой выбор. Наши опытные повара используют только самые свежие ингредиенты.</p>
    </div>
</div>

<div class="mobilevideo">
    <!-- Button trigger modal -->
    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img style="height: 70px;width: 70px" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>

    </a>
    <img src="{{ asset('assets/frontend/images/mainRestaurant/mainRestaurantVideo.webp') }}" alt="youtubeVideo"/>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="display: flex;justify-content: center;align-items: center">
                <iframe width="900" height="600" src="https://www.youtube.com/embed/E9L6eL0xcu0"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="restSpecialOffer">
    <h6>Другие рестораны</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>ALL DAY DINING A’LA CARTE</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Дальневосточный A’LA CARTE</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-french') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/frenchsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Французский A’LA CARTE</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-seaside') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/seasidesmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>SEASIDE A’LA CARTE</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-sushi-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/sushibarsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>SUSHI BAR A’LA CARTE</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Итальянский A’LA CARTE</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Мини клуб A’LA CARTE</h5>
                </a>

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

<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/restaurantDetails.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/restaurantsDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection