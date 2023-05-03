@extends('frontend.en.layouts.master')

@section('title', 'Irish Pub - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('irish-pub') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-irish-pub') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-irish-pub') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-irish-pub') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barHero">
    <div class="row">
        <div class="col-md-12">
            <h1>Irish Pub</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="swiper PubVerticalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub6.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub6.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub7.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub7.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub8.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub8.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub9.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub9.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="swiper BarHorizontalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub1.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub2.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub3.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub4.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/irishpub/irishPub5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/irishpub/irishPub5.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="barDetailHeroText">
                <div class="hours">
                    <img src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock" class="barSvg">
                    <span>12:00 - 00:00</span>
                </div>
                <article>
                    <p>Step into the warm and inviting atmosphere of our Irish pub, where you can enjoy a pint of classic alcohol. Port Nature’s pub is the perfect spot to unwind and experience the charm and hospitality of Ireland. Special cocktails, local alcohol and cold drinks.
                    </p>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Other Bars & Cafes</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="SCRIPT CHIVAS"/>
                    </figure>
                    <h5>Script Chivas</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('lobby-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/lobbybarsmall.webp') }}" alt="LOBBY BAR"/>
                    </figure>
                    <h5>LOBBY BAR</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('flamingo-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/flamingobarsmall.webp') }}" alt="FLAMINGO BAR"/>
                    </figure>
                    <h5>FLAMINGO BAR</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
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
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
@endsection