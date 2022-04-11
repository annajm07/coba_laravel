@extends('layout.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
            <form action="/register" method="POST">
                @csrf
              <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="name" value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                    @error('name')      
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="username" value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
                    @error('username')      
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>
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
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login now</a></small>
          </main>
    </div>
</div>

@endsection