@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

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
    <!-- Midtrans-->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-vCpvH1Y6r3kkUWqn"></script>
    <title>HOMINDO</title>
</head>

<body>
    @include('laymas')
    <section id="checkout">
        <div class="container p-5">
            <div class="row mt-5">
                <div class="col-8">
                    <div class="cardcarousel p-2" style="width: 40rem">
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
                                <img src="Assets/img/icon_luas.svg" alt="" /><sub class="ms-1">72 m</sub>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-4 justify-content-center align-items-center">
                    <form method="post" action="/payment/store" id="form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="fullName" class="form-control" id="full-name" placeholder="Enter Your Name" name="name" />
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="occupation" class="form-control" id="occupation" placeholder="Enter Your Occupation" name="occupation" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number" name="phone" />
                        </div>
                        <button type="submit" class="btn btn-danger w-100 mt-4" id="pay-button">Pay Now</button>

                </div>
                </form>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function(e) {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            e.preventDefault();
            window.snap.pay('{{ $snap_token }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    let name = $('#full-name').val();
                    let email = $('#email').val();
                    let phone = $('#phone').val();
                    let occupation = $('#occupation').val();

                    $.ajax({
                        url: "/payment/store",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            name: name,
                            email: email,
                            phone: phone, 
                            occupation: occupation,
                        },

                        success: function(response) {
                            console.log(response);
                            var url = "{{ route('dashboard') }}"
                            location.href = url;
                        },
                        error: function(response) {
                            alert(response)
                            console.log(response)
                        }
                    });
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    //alert('you closed the popup without finishing the payment');
                    var url = "/dashboard"
                    location.href = url;
                }
            })
        });
    </script>
</body>

</html>