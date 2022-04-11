@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>  
  </div> 

  <div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger " onclick="return confirm('apakah anda yakin ?')"><span data-feather="delete"></span> Delete</button>
                </form>

            <article class="text-center">
                <h3>{{ $post->title }}</h3>
                <p class="fs-5 text-start">{{ $post->body }}</p>
            </article>
        </div>
    </div>
</div>
@endsection