
@extends('layout.main')

@section('container')
  <h1>Categories</h1>
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
      <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-dark text-center">
              <div class="card">
                <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{{ $category->name }}</p>
                </div>
              </div>
            </a>
          </div>
      @endforeach
    </div>
  </div>

@endsection
