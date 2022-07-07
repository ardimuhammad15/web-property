<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
    <title>HOMINDO - {{ $title }}</title>
  </head>
  <body>
    <section class="login p-4 d-flex">
      <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-6">
            <div class="header mb-5">
              <h1>LOGIN</h1>
              <p>Welcome back to your account</p>
            </div>
            <div class="login-form" >
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" />
              </div>
              <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Enter Password" />
              </div>
              <div class="button-login mb-3 text-center">
                <a href="{{ route('home')}}"><button type="button" class="btn btn-danger">Login</button></a>
              </div>
              <div class="text-center">
                <span class="d-inline">Don't have an account? <a href="{{ route('signup')}}" class="d-inline text-decoration-none" style="color: red">Sign Up</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="login-right w-50 h-100">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Assets/img/image-login.svg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Assets/img/image-login2.svg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
