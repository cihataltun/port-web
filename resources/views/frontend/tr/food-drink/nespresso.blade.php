@extends('frontend.tr.layouts.master')

@section('title', 'Nespresso - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-nespresso-cafe') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('nespresso-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-nespresso-cafe') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-nespresso-cafe') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="nespressoSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-1.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Mükemmel kahve şansa bırakılamaz.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Mükemmel kahve şansa bırakılamaz.</p>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-nespresso" href="{{ asset('assets/frontend/images/nespresso/nespressoSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Mükemmel kahve şansa bırakılamaz.</p>
            </article>
        </div>
    </div>
</div>

<div class="nespressoHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/nespresso/nespressoLogo.png') }}" alt="nespresso"/>
    </figure>
    <p>Mükemmel kahve zevki kazara olmaz. İlkelerimizi yaşatarak tutarlı ve ödün vermeden, kupadan kupaya her adımı yaratılmalıdır.</p>
</div>

<div class="container">
    <div class="nespressoText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/nespresso/nespresso.webp') }}" alt="hennesy"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Kahve hasat edilir ve işlenir, yani fermente edilir, yıkanır, ve dahası.
                    </h2>
                    <p>Çekirdekten bardağa giden karmaşık yol boyunca, işleri bizim yaptığımızdan daha hızlı yapmanın yolları var ve kesinlikle daha ucuz yollar. Ama daha iyi bir yol yok.</p>
                    <p>Tek bir hatalı çekirdeğin bütün bir partiyi lekeleyebileceğini bildiğimizden, yolun her adımında ayrıntıları doğru bir şekilde okumaya kasıtlı bir bağlılıkla kalitenin kontrolünü son çekirdeğe kadar taşımaya çalışıyoruz. Port Nature bu kahvenin içilebileceği doğru yer.</p>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/nespresso/nespressoBg.png') }}" alt="bg"/>
    </div>
</div>

<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Diğer Kafeler & Barlar</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Kafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/js/nespresso.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/nespresso.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection