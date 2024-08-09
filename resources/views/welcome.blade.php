<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components.header')
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css')}}" />
</head>

<body class="bg-soft-blue">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a href="." class="navbar-brand logo">
                <img src="{{ url('assets/images/logo.png')}}" alt="Logo"> Car Rental
            </a>
            <button id="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('register')}}" class="btn">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login')}}" class="btn btn-primary">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Pilih tanggal booking</h5>
                            <form action="#" method="post">
                                <div class="row align-items-end g-3">
                                    <div class="col-6 col-lg-5">
                                        <label for="from_date">Dari Tanggal</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                            <input type="date" id="from_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-5">
                                        <label for="to_date">Sampai Tanggal</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                            <input type="date" id="to_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <button type="submit" class="btn btn-primary w-100">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-50">
                        <img src="{{ url('assets/images/banner.png')}}" alt="Banner 1" class="rounded-4">
                    </div>
                    <div class="swiper-slide w-50">
                        <img src="{{ url('assets/images/banner.png')}}" alt="Banner 1" class="rounded-4">
                    </div>
                    <div class="swiper-slide w-50">
                        <img src="{{ url('assets/images/banner.png')}}" alt="Banner 1" class="rounded-4">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="fw-semibold mb-3 mb-lg-5">Katalog</h3>
            <div class="row row-cols-2 row-cols-lg-4 g-4">
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/agya_lrg.jpg')}}" class="card-img-top rounded-top-4" alt="Toyota Agya">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Agya</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">4 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 715.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/avanza_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Avanza</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">5 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 850.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/innova_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Innova</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">6 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 1,100.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/agya_lrg.jpg')}}" class="card-img-top rounded-top-4" alt="Toyota Agya">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Agya</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">4 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 715.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/avanza_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Avanza</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">5 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 850.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/innova_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Innova</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">6 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 1,100.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/avanza_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Avanza</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">5 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 850.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card card-product">
                        <img src="{{ url('assets/images/cars/innova_lrg.jpg')}}" class="card-img-top rounded-top-4"
                            alt="Toyota New Yaris GR Sport">
                        <div class="card-body p-3 p-lg-4">
                            <h5 class="text-dark fw-semibold mb-3">Toyota Innova</h5>
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/seat.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">6 seats</span>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ url('assets/images/money.png')}}" style="width: 16px;" alt="Seat">
                                        <span class="fs-7">Rp. 1,100.000/hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                <p class="mb-0 fs-7 text-secondary">
                    &copy; 2024 Guntur Developer At Telkom University <br>
                    A division of Guntur Developer
                </p>
                <a href="https://onlenkan.com" class="mb-0 fs-7 link">
                    Onlenkan / About
                </a>
            </div>
        </div>
    </footer>

    @include('components.script')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".banner-swiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>
</html>
