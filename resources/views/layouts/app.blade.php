<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Posts</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Posts</h1>

          @if (Session::has('success'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
          </div>
          @endif

          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
