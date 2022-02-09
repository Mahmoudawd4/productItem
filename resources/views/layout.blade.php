<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>create</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">


    <a class="navbar-brand" href="{{ route('cat.list') }}">category list </a>
    <a class="navbar-brand" href="{{ route('arti.list') }}">article list </a>

    <a class="navbar-brand">user name : {{ Auth::user()->name }}</a>

      {{-- <form class="d-flex "> --}}
      {{-- <a class="navbar-brand" href="">logout</a> --}}

      <form method="POST" class="d-flex "  action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link class="btn btn-info" :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>

      {{-- </form> --}}
    </div>
  </div>
</nav>

        <div class="container">
            @yield('content')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
    </html>
