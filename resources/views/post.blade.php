

@extends('layout.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="text-center">
                <h3>{{ $post->title }}</h3>
                <p class="text-start">By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p class="fs-5 text-start">{{ $post->body }}</p>
            </article>
            <a href="/posts">Back To Posts</a>
        </div>
    </div>
</div>

@endsection


