<div>
    <h2 class="text-dark fw-semibold mb-5">Selamat Datang Kembali, Admin 👋</h2>
    <div class="row g-3 mb-5">
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bxs-car fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Mobil</p>
                    <h3 class="mb-0 text-dark fw-semibold">{{ $cars }} Mobil</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bxs-user fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Customer</p>
                    <h3 class="mb-0 text-dark fw-semibold">{{ $customers }} Customer</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-calendar fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Jumlah Booking</p>
                    <h3 class="mb-0 text-dark fw-semibold">10 Booking</h3>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="card border-0 rounded-3">
                <div class="card-body p-4">
                    <i class="bx bx-money-withdraw fs-1 text-primary"></i>
                    <p class="mb-1 mt-2 text-secondary">Total Pendapatan</p>
                    <h3 class="mb-0 text-dark fw-semibold">Rp. 10.000.000</h3>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-dark fw-medium mb-3">Booking Ongoing</h4>
    <div class="card border-0 rounded-3">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customer</th>
                            <th>Mobil</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Toyota Avanza</td>
                            <td>05 Mei 2024</td>
                            <td>07 Mei 2024</td>
                            <td><span class="badge bg-primary">On Going</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ali</td>
                            <td>Toyota Avanza</td>
                            <td>05 Mei 2024</td>
                            <td>07 Mei 2024</td>
                            <td><span class="badge bg-primary">On Going</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
