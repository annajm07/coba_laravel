<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
      

    

    <title>Annajm | {{ $title }}</title>
  </head>
  <body>

@include('partials.navbar')

<div class="container mt-2">
    @yield('container')
</div>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


    

  </body>

</html>