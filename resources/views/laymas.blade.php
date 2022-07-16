<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/13a7b28a80.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="style/style.css" />

  <!-- logo title -->
  <link rel="icon" href="Assets/img/logo-homindo.svg" type="image/x-icon" />
  <title>HOMINDO</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white position-fixed w-100">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route ('home') }}">
        <img src="Assets/img/logo-homindo.svg" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Buy</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Rent</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item mx-2">
            <a class="garis_verikal" href="#"></a>
          </li>
          <li class="nav-item mx-2">
            <a class="navbar-brand" href="#">
              <img src="Assets/img/residential-navbar.svg" alt="" />
            </a>
          </li>
        </ul>
        <div>
          <!-- Authentication Links -->
          @guest
          @if (Route::has('login'))
          <a class="btn btn-danger" href="{{ route('login') }}">SIGN UP / LOG IN</a>
          @endif
          @else
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </nav>
  @yield('content')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>