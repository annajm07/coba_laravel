@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-5">

    <div class="col-md-5">
        @if (session()->has('status'))
          <div class="alert alert-success text-center">
              {{ session('status') }}
          </div>
        @endif

        @if (session()->has('error'))
          <div class="alert alert-danger text-center">
              {{ session('error') }}
          </div>
        @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
              @csrf

              <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                  <label for="floatingInput">Email address</label>
                  @error('email')      
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="form-floating">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                  @error('password')      
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">have an account? <a href="/register">register now</a></small>
          </main>
    </div>
</div>

@endsection
