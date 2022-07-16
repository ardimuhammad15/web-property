<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
    <title>HOMINDO</title>
</head>

<body>
    @include('laymas')
    <section id="unit_rumah">
        <div class="container p-5">
            <div class="mt-5">
                <div class="mt-4">
                    <a href="{{ route ('home') }}"><button type="button" class="btn btn-secondary">
                            <i class="fa-solid fa-arrow-left me-2"></i>Kembali
                        </button></a>
                </div>
                <div class="row justify-content-center">
                    <div class="cardcarousel p-2" style="width: 40rem;">
                        <div id="carouselUnit" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/img/rumah1.svg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/img/rumah2.svg" class="d-block w-100" alt="..." />
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/img/rumah3.svg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselUnit" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselUnit" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <h2 class="mt-2">Rumah Minimalis BSD Lantai 2</h2>

                        <div class="card-fasilitas mt-2">
                            <span class="icon_unit ms-3">
                                <img src="Assets/img/icon_bathtub-f.svg" alt="" /><sub class="ms-1">2</sub>
                            </span>
                            <span class="icon_unit ms-3">
                                <img src="Assets/img/icon_bed.svg" alt="" /><sub class="ms-1">2</sub>
                            </span>
                            <span class="icon_unit ms-3">
                                <img src="Assets/img/icon_luas.svg" alt="" /><sub class="ms-1">2</sub>
                            </span>
                        </div>
                        <div class="deskripsi_unit">
                            <p class="mt-2">Lokasi strategis</p>
                            <span>
                                <i class="fa-solid fa-circle-dot" style="font-weight: 400"><span class="ms-2">
                                        5 menit dari Mcdonalds</span>
                                </i>
                                <br />
                                <i class="fa-solid fa-circle-dot" style="font-weight: 400"><span class="ms-2">20 menit dari RS Bethsada</span>
                                </i>
                            </span>
                        </div>
                        <div class="button_agen mt-2">
                            <a href="https://wa.me/6281295403122"><button type="button" class="btn btn-danger">
                                    Lanjut Kontak Agen
                                </button></a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                Harga Unit
                                <div class="box">
                                    <h3>IDR 650.000.000</h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="{{ route ('payment') }}">
                                    <button class="btn btn-success w-100">DP<br><b>IDR 10.000.000</b></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>