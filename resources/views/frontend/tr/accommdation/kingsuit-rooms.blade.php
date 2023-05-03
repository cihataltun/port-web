@extends('frontend.tr.layouts.master')

@section('title', 'King Süit - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-kingsuit-rooms') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kingsuit-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kingsuit-rooms') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kingsuit-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

    <div class="roomDetail">
        <div class="kingSuiteDetailHero">
            <h1>KING SÜİT ODASI</h1>
        </div>

        <div class="roomDetailText">
            <div class="container">
                <span>Geniş odanızda mucizevi deniz manzarasının ve lüksün sizi büyülemesini izleyin.<br> Geniş balkon, 3 ayrı oda, modern ve yüksek kalite tasarım.</span>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecs">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                         alt="adult"/>
                    <p>5 YETİŞKİN +1</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                         alt="singlebed"/>
                    <p>2 TEKLİ YATAK</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                         alt="doublebed"/>
                    <p>1 ÇİFT KİŞİLİK YATAK</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                         alt="meter"/>
                    <p>110 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                         alt="view"/>
                    <p>DENİZ MANZARALI</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecsTablet">
                <div class="detailSpecLine">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                             alt="adult"/>
                        <p>5 YETİŞKİN +1</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                             alt="singlebed"/>
                        <p>2 TEKLİ YATAK</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                             alt="doublebed"/>
                        <p>1 ÇİFT KİŞİLİK YATAK</p>
                    </div>
                </div>
                <div class="detailSpecLineSecond">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                             alt="meter"/>
                        <p>110 m²</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                             alt="view"/>
                        <p>DENİZ MANZARALI</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="roomPhotos lc-king">
                <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/rooms/img_room_king1.jpeg') }}">
                        <img src="{{ asset('assets/frontend/images/rooms/img_room_king1.jpeg') }}" alt="kingsuite"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/rooms/img_room_king2.jpeg') }}">
                        <img src="{{ asset('assets/frontend/images/rooms/img_room_king2.jpeg') }}" alt="kingsuite"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/rooms/img_room_king3.jpeg') }}">
                        <img src="{{ asset('assets/frontend/images/rooms/img_room_king3.jpeg') }}" alt="kingsuite"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/rooms/img_room_king4.jpeg') }}">
                        <img src="{{ asset('assets/frontend/images/rooms/img_room_king4.jpeg') }}" alt="kingsuite"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/rooms/img_room_king5.jpeg') }}">
                        <img src="{{ asset('assets/frontend/images/rooms/img_room_king5.jpeg') }}" alt="kingsuite"/>
                    </a>
                </div>
                    <div class="col-12 col-md-6 p-3">
                        <article>
                            <h6>Lüks ve Konfor, Krallar gibi</h6>
                            <p>Port Nature'ın, bu zarif, üç yatak odalı süitleri, oteldeki en geniş süitler arasındadır.
                                Her süit deniz manzaralıdır. Mermer fuayeler ve geniş alan, ayrı oturma odası ve geniş
                                balkonlu geniş bir yatak odası bulunmaktadır.</p>
                            <span>Tatilinizin tadını çıkarın</span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="roomSketch">
            <img class="familyRoomSketch" src="{{ asset('assets/frontend/images/familyroom/familyRoomSketch.png') }}"
                 alt=""/>
            <div class="zoomButtons">
              <span class="zoomIn">
              </span>
                <span class="zoomOut">
              </span>
            </div>
            <p>5 Adults + 1 · 1 double bed · 2 single beds<br>45 m² · Corner Sea View</p>
        </div>
    </div>

<!-- Features -->
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Özellikler</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balkon / Teras</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Ayrı Duş & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Ayrılmış Klima Sistemi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Sıcak İçecek Seti<br> (çay & kahve)
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Dijital Kasa
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/tv.svg') }}"/>
                <p>
                    Led TV
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/towel.svg') }}"/>
                <p>
                    Havlu
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Doğrudan Erişimli Telefon
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
            <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Uydu Yayını
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/minibar.svg') }}"/>
                <p>
                    Minibar
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/chair.svg') }}"/>
                <p>
                    Masa & Sandalye
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Makyaj Aynası
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Ücretsiz Wi-Fi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Parke Zemin
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Saç Kurutma Makinesi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Terlikler
                </p>
            </div>
        </div></div>
       
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Hepsini Göster</a>

    </div>
</div>
<!-- Features End -->    <!-- 360 View -->
    <div class="room360View">
        <img src="{{ asset('assets/frontend/images/kingSuite/kingSuite360Placeholder.webp') }}" alt="360view"/>
    </div>
    <!-- 360 View End -->
    <!-- Contact -->
    @include('frontend.tr.layouts.contact')
    <!-- Contact End -->
    <!-- Other Rooms -->
<div class="otherRoomsWrapper">
        <div class="otherRooms">
            <div class="row">
                <div class="col-12 col-md-12">
                    <article>
                        <h3>Diğer Oda Seçeneklerimiz</h3>
                        <span>İhtiyaçlarınıza yönelik Port Nature odalarını bulabilirsiniz.</span>
                    </article>
                </div>
            </div>
            <div class="roomsDetailBg">
                <div class="rooms-detail-wrapper">
                    <div class="other-room-wrapper">
                        <div class="otherRoomImage firstRoom">
                            <a class="roomlink" href="{{ route('tr-family-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/familyRoom.webp') }}"
                                         alt="familyroom"/>
                                </figure>
                                <h4>AİLE ODASI</h4>
                                <span>4 Yetişkin + 1 ·  45 m²  ·  Yandan Manzaralı</span>
                                <p>Siz odanızda dinlenirken çocuklarınız kendilerine özel alan bulabilecekler.</p>
                                <div class="moreButton">
                                    <a href="{{ route('tr-family-rooms') }}">More About</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="other-room-wrapper" id="otherRoomSecond">
                        <div class="otherRoomImage">
                            <a class="roomlink" href="{{ route('tr-standard-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/standardRoom.webp') }}"
                                         alt="standardRoom"/>
                                </figure>
                                <h4>STANDART ODA</h4>
                                <span>2 Yetişkin + 2 ·  34 m²  ·  Deniz / Kara / Yandan Manzaralı</span>
                                <p>Çok fazla lüks unsurlar size unutulmaz bir tatil sağlıyor.</p>
                                <div class="moreButton">
                                    <a href="{{ route('tr-standard-rooms') }}">Daha Fazlası</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Other Rooms End -->

    <div class="pageUpButton">
        <a href="#">
            <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
        </a>
    </div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}"></script>
<script type='text/javascript'>
      $(document).ready(function() {
        const $obj = lc_lightbox('.lc-king a');
      });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection