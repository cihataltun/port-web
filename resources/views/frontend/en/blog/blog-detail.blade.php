@extends('frontend.en.layouts.master')

@section('title', "$post_content->name - Port Nature Luxury Resort & Spa Hotel")

@section('content')

<section class="blog">

    <div class="container">
        {!! $post_content->description !!}
    </div>

    @include('frontend.en.layouts.contact')

    <div class="recomBlogGrid">
            <h6><a href="{{ route('blog') }}"> YOU WILL ALSO BE INTERESTED TO READ THESE ARTICLES</a></h6>
            <div class="blogGrid">
                @foreach ($allposts as $post_item)
                    <div class="miniBlog">
                        <a href="{{ url('blog-page/'.$post_item->slug) }}">
                            <figure>
                                <img src="{{ asset('uploads/blogs/' . $post_item->title_image) }}" alt="{{ $post_item->meta_title }}"/>
                            </figure>
                            <span>{{ $post_item->name }}</span>
                            <p>{{ $post_item->title_description }}</p>
                            <div class="blogMoreButton">
                                More About
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection
