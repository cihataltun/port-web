@extends('frontend.en.layouts.master')

@section('title', 'PortNature Blog - Port Nature Luxury Resort & Spa Holiday')

@section('content')

<div class="blogHero">
    <h1>Best Ultra All Inclusive Hotels In Antalya Turkey<br>
        Portnature Hotels Blog </h1>
    <div class="mobileText">
        <h2>Portnature Hotels Blog </h2>
        <h3>Best Ultra All Inclusive Hotels In Antalya Turkey</h3>
    </div>
</div>
<div class="recomBlogGrid">
    <div class="blogGrid">
        
        @foreach ($postsList as $post)
            <div class="miniBlog">
                <a href="{{ url('blog-page/'.$post->slug) }}">
                    <figure>
                        <img src="{{ asset('uploads/blogs/' . $post->title_image) }}" alt="{{ $post->meta_title }}"/>
                    </figure>
                    <span>{{ $post->name }}</span>
                    <p>{{$post->title_description}}</p>
                    <div class="blogMoreButton">
                        More About
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
<div class="pageUpButton">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#">
                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 18L10.5 8L1 18" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 8L10.5 1L4 8" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

@endsection