<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />

        <!-- Font Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet"
        />

        <!-- Font awesome -->
        <script
            src="https://kit.fontawesome.com/13a7b28a80.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS -->
        <link rel="stylesheet" href="style/style.css" />

        <!-- logo title -->
        <link
            rel="icon"
            href="Assets/img/logo-homindo.svg"
            type="image/x-icon"
        />
        <title>HOMINDO</title>
    </head>
    <body>
        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="cardcarousel p-2" style="width: 40rem">
                            <div
                                id="carouselUnit"
                                class="carousel slide"
                                data-bs-ride="carousel"
                            >
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img
                                            src="Assets/img/rumah1.svg"
                                            class="d-block w-100"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="carousel-item">
                                        <img
                                            src="Assets/img/rumah2.svg"
                                            class="d-block w-100"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="carousel-item">
                                        <img
                                            src="Assets/img/rumah3.svg"
                                            class="d-block w-100"
                                            alt="..."
                                        />
                                    </div>
                                </div>
                                <button
                                    class="carousel-control-prev"
                                    type="button"
                                    data-bs-target="#carouselUnit"
                                    data-bs-slide="prev"
                                >
                                    <span
                                        class="carousel-control-prev-icon"
                                        aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden"
                                        >Previous</span
                                    >
                                </button>
                                <button
                                    class="carousel-control-next"
                                    type="button"
                                    data-bs-target="#carouselUnit"
                                    data-bs-slide="next"
                                >
                                    <span
                                        class="carousel-control-next-icon"
                                        aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <h2 class="mt-2">Rumah Minimalis BSD Lantai 2</h2>

                            <div class="card-fasilitas mt-2">
                                <span class="icon_unit ms-3">
                                    <img
                                        src="Assets/img/icon_bathtub-f.svg"
                                        alt=""
                                    /><sub class="ms-1">2</sub>
                                </span>
                                <span class="icon_unit ms-3">
                                    <img
                                        src="Assets/img/icon_bed.svg"
                                        alt=""
                                    /><sub class="ms-1">2</sub>
                                </span>
                                <span class="icon_unit ms-3">
                                    <img
                                        src="Assets/img/icon_luas.svg"
                                        alt=""
                                    /><sub class="ms-1">72 m</sub>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 justify-content-center align-items-cente">
                        <div class="mb-3r">
                            <label for="email" class="form-label"
                                >Email Address</label
                            >
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Enter Your Email"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="fullName" class="form-label"
                                >Full Name</label
                            >
                            <input
                                type="fullName"
                                class="form-control"
                                id="full-name"
                                placeholder="Enter Your Name"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label"
                                >Occupation</label
                            >
                            <input
                                type="occupation"
                                class="form-control"
                                id="occupation"
                                placeholder="Enter Your Occupation"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="cardNumber" class="form-label"
                                >Card Number</label
                            >
                            <input
                                type="cardNumber"
                                class="form-control"
                                id="cardNumber"
                                placeholder="Enter Your Card Number"
                            />
                        </div>
                        <div class="cardNumber1 row">
                            <div class="col-6">
                                <label for="cardNumber" class="form-label"
                                    >Expired</label
                                >
                                <input
                                    type="cardNumber"
                                    class="form-control"
                                    id="cardNumber"
                                />
                            </div>
                            <div class="col-6">
                                <label for="cardNumber" class="form-label"
                                    >CVC</label
                                >
                                <input
                                    type="cardNumber"
                                    class="form-control"
                                    id="cardNumber"
                                />
                            </div>
                        </div>
                        <a href="{{ route ('dashboard') }}">
                        <button type="button" class="btn btn-danger w-100 mt-4">Pay Now</button>
                        </a>
                        <p class="text-center mt-2" style="opacity: .6; font-size: 14px;"><img src="Assets/img/icon_secure.svg" alt="">Your payment is secure and encrypted</p>
                    </div>
                </div>
            </div>
            @if ($order->payment_status == 1)
                <button class="btn btn-primary" id="pay-button">Pay Now</button>
            @else
                Payment successful
            @endif
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script>
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            snap.pay('{{ $snapToken }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
    </body>
</html>
