<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Asist Smart Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="../admin/assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    {{-- <link rel="stylesheet" href="../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../admin/assets/vendor/libs/apex-charts/apex-charts.css" /> --}}

    <!-- Page CSS -->
    <style>
        hr.solid {
            margin: 1rem 0;
            color: #d9dee3;
            border: 0;
            border-top: var(--bs-border-width) solid;
            opacity: 1;
        }

        .empty-message {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30vh;
            text-align: center;
        }
    </style>

    <!-- Helpers -->
    <script src="../admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../admin/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            {{-- ! Sidebar --}}
            @include('admin.components.sidebar', ['clicked' => 'active', 's' => 'dashboard'])

            {{-- ! Layout container --}}
            <!-- Layout container -->
            <div class="layout-page">

                {{-- ! Navbar --}}
                @include('admin.components.navbar')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        {{-- ! Test Dashboard --}}
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Selamat Datang Kembali! 🎉</h5>
                                                <p class="mb-4">
                                                    Sistem Pendukung Keputusan rekomendasi asisten matakuliah pratikum
                                                    menggunakan metode <span class="fw-bold">Profile Matching</span>
                                                </p>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Cara Penggunaan Aplikasi</button>

                                                {{-- ! Modal --}}
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Cara
                                                                    Penggunaan Aplikasi</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{-- ! Cara penggunaan aplikasi --}}
                                                                <div class="col-md">
                                                                    <div
                                                                        class="card shadow-none bg-transparent border border-primary">
                                                                        <div class="card-body text-primary">
                                                                            <p class="card-text"> 1. Masuk ke menu "Data
                                                                                Pendaftar" </p>
                                                                            <p class="card-text"> 2. Lakukan pemrosesan
                                                                            </p>
                                                                            <p class="card-text"> 3. Terdapat beberapa
                                                                                kriteria yang digunakan untuk menentukan
                                                                                asisten pratikum. </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../admin/assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140" alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ! Double card --}}
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4 order-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <h5 class="fw-semibold mb-2 text-warning"
                                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                    Algoritma & Struktur Data Praktik</h5>
                                                <h4>10 Pendaftar</h4>
                                                <small class="card-title mb-2">3 Diterima</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="fw-semibold mb-1 text-primary" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">Aplikasi Automasi Perkantoran</span>
                                                <h4>8 Pendaftar</h4>
                                                <small class="card-title mb-2">3 Diterima</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ! Data kriteria --}}
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt3"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt3">
                                                            <a class="dropdown-item"
                                                                href="{{ url('admin/data_pendaftar') }}">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-2">Data Kriteria</span>
                                                <p class="card-title mb-3"
                                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                    Kriteria adalah parameter yang digunakan sebagai profil ideal yang
                                                    harus dimiliki calon asisten matakuliah pratikum.</p>
                                                <small class="text-primary fw-semibold"><span class="fw-bold">Jumlah
                                                        Data : </span>7 Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ! Double card --}}
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4 order-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <h5 class="fw-semibold mb-2 text-warning"
                                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                    Sistem Basis Data Praktik</h5>
                                                <h4>10 Pendaftar</h4>
                                                <small class="card-title mb-2">3 Diterima</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <span class="fw-semibold mb-1 text-primary" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">Sistem Operasi Praktik</span>
                                                <h4>6 Pendaftar</h4>
                                                <small class="card-title mb-2">2 Diterima</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ! Data pendaftar --}}
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt3"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt3">
                                                            <a class="dropdown-item"
                                                                href="{{ url('admin/kriteria') }}">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-2">Data Pendaftar</span>
                                                <p class="card-title mb-3"
                                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                    Data mahasiswa yang melakukan pendaftaran asisten
                                                    matakuliah pratikum melalui form pendaftaran.
                                                </p>
                                                <small class="text-primary fw-semibold"><span class="fw-bold">Jumlah
                                                        Data : </span>32 Data</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ! Double card --}}
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4 order-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../admin/assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                </div>
                                                <h5 class="fw-semibold mb-2 text-warning"
                                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                                    Jaringan Komputer Praktik</h5>
                                                <h4>10 Pendaftar</h4>
                                                <small class="card-title mb-2">3 Diterima</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        
                                        <div class="card">
                                            <a href="{{ url('admin/kriteria') }}" class="menu-link" style="display: flex; justify-content: center">
                                            <div class="card-body">
                                                <div class="card-body pb-0 px-0 px-md-0">
                                                        <i class="menu-icon tf-icons bx bx-plus bx-lg text-secondary" style="display: flex; justify-content: center"></i>
                                                    <br>
                                                    <div class="mb-4 text-secondary" style="display: flex; justify-content: center">Selengkapnya</div>
                                                </div>
                                            
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ! Tabel hasil ranking --}}
                        <div class="row">
                            <div class="col mb-4">
                                <div class="card">
                                    <h5 class="card-header fw-bold">Mahasiswa Diterima</h5>
                                    <div class="table-responsive mb-4">
                                        <table class="table table-bordered mx-4 cell-fit" style="width: 96%">
                                            <thead>
                                                <tr class="table-info">
                                                    <th>Nama</th>
                                                    <th>Asal Prodi</th>
                                                    <th>Matakuliah</th>
                                                    <th style="text-align: center;">Nilai Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Albert Cook</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>Web Service Praktik</td>
                                                    <td style="text-align: center;">4.12</td>
                                                </tr>
                                                <tr>
                                                    <td>Barry Hunter</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>Web Service Praktik</td>
                                                    <td style="text-align: center;">4.11</td>
                                                </tr>
                                                <tr>
                                                    <td>Trevor Baker</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>Web Service Praktik</td>
                                                    <td style="text-align: center;">4.09</td>
                                                </tr>
                                                <tr>
                                                    <td>Jerry Milton</td>
                                                    <td>Sistem Informasi</td>
                                                    <td>Web Service Praktik</td>
                                                    <td style="text-align: center;">4.08</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ! Belum dilakukan perankingan --}}
                        {{-- <div class="empty-message">
                                <div>
                                    <h4>Belum dilakukan perankingan</h4>
                                    <p>Silahkan lakukan pemrosesan data terlebih dahulu</p>
                                </div>
                            </div> --}}
                    </div>
                </div>

                {{-- ! Footer --}}
                @include('components.footer')
            </div>
        </div>
    </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
