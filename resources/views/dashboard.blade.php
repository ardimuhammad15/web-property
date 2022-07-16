@include('laymas')

<section id="dashboard">
    <div class="container p-5">
        <div class="mb-3 mt-5">
            <a href="{{ route ('home') }}">
                <button type="button" class="btn btn-secondary">
                    <i class="fa-solid fa-arrow-left me-2"></i>
                    Kembali
                </button>
            </a>
        </div>
        <h3 style="color: red">Dashboard</h3>
        <h2 style="color: black; font-weight: 600">My Order</h2>

        <div class="row mt-4">
            <div class="col-3">
                <img src="Assets/img/rumah1.svg" alt="" class="w-100" />
            </div>
            <div class="col-3 mx-auto">
                <h3 style="font-size: 14px; font-weight: 600">
                    Rumah Minimalis BSD
                </h3>
                <!-- <p style="font-size: 12px; font-weight: 400"> 
                    July 7, 2022
                </p>-->
                </span>

            </div>
            <div class="col-2">
                <div>
                    IDR650,000,000,-
                </div>
            </div>

            <div class="col-2">
                <a href="https://wa.me/6281295403122" type="button" class="button-wa btn btn-danger w-100">Agent Contact</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')