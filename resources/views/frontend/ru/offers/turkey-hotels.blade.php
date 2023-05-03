@extends('frontend.ru.layouts.master')

@section('title')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-turkey-hotels') }}"
        aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('turkey-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-turkey-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-turkey-hotels') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')


{{-- Codes Here --}}


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />

@endsection