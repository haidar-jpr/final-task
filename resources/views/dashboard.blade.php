<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Asist Smart Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <style>
        hr.solid {
            margin: 1rem 0;
            color: #d9dee3;
            border: 0;
            border-top: var(--bs-border-width) solid;
            opacity: 1;
        }
    </style>

    <!-- Helpers -->
    <script src="admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar', ['clicked' => 'active', 's' => 'dashboard'])

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('components.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row mb-3">
                            <div class="col">
                                {{-- ! Pengumuman Diterima --}}
                                {{-- <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <img class="card-img-top" src="admin/assets/img/elements/congrat.jpg"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <h5 class="card-title">Pengumunan Hasil Seleksi</h5>
                                            <p class="card-text">
                                                Anda <b style="color: #71DD37">Diterima</b> menjadi asisten praktikum,
                                                Terima kasih telah mengikuti seleksi dengan baik.
                                            </p>
                                            <button type="button" class="btn btn-success">Cetak Pengumuman</button>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- ! Sedang dilakukan seleksi --}}
                                <div class="col mb-3">
                                    <div class="card">
                                        <img class="card-img-top" src="admin/assets/img/elements/pros.jpg"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <h5 class="card-title">Pengumunan Hasil Seleksi</h5>
                                            <p class="card-text">
                                                Sedang dilakukan proses <b style="color: #374add">Seleksi</b>, harap bersabar ya 😉
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{-- ! Pengumuman Tidak Diterima --}}
                                {{-- <div class="col mb-3">
                                    <div class="card">
                                        <img class="card-img-top" src="admin/assets/img/elements/fail.jpg"
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <h5 class="card-title">Pengumunan Hasil Seleksi</h5>
                                            <p class="card-text">
                                                Maaf anda <b style="color: #dd3737">Belum Lolos</b> menjadi asisten
                                                praktikum,
                                                Terima kasih telah mengikuti seleksi dengan baik.
                                            </p>
                                            <button type="button" class="btn btn-success">Cetak Pengumuman</button>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- ! Pengumuman Proses Belajar Mengajar --}}
                                <div class="col mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-danger">Pengumuman proses belajar mengajar...
                                            </h5>
                                            <p>Mahasiswa yang diterima menjadi asisten dosen dapat segera melakukan
                                                konfirmasi
                                                ke dosen pengampu matakuliah.</p>

                                            <ul class="list-group mb-2">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    1. Perkuliahan Tahap 1
                                                    <span class="badge bg-label-warning rounded-pill">25 September
                                                        2024</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    2. Ujian Tengah Semester
                                                    <span class="badge bg-label-warning rounded-pill">13 November
                                                        2024</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    3. Perkuliahan Tahap 2
                                                    <span class="badge bg-label-warning rounded-pill">27 November
                                                        2024</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    4. Ujian Akhir Semester
                                                    <span class="badge bg-label-warning rounded-pill">15 Januari
                                                        2025</span>
                                                </li>
                                            </ul>

                                            <small class="text-danger">* Wajib melakukan konfirmasi sebelum
                                                perkuliahan
                                                tahap 1 dimulai</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ! Data Diri --}}
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Diri</h5>
                                        <img class="img-fluid d-flex mx-auto my-4" src="admin/assets/img/elements/4.jpg"
                                            alt="Card image cap" />
                                        <h5>Subhan Ikraam Haidar</h5>

                                        <hr class="solid">

                                        <p class="card-text">Nama <br> <small>Subhan Ikraam Haidar</small></p>
                                        <hr class="solid">
                                        <p class="card-text">NIM <br> <small>5200311017</small></p>
                                        <hr class="solid">
                                        <p class="card-text">Email <br> <small>haidar.dod@gmail.com</small></p>
                                        <hr class="solid">
                                        <p class="card-text">No Handphone <br> <small>085482194204</small></p>

                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- / Content -->

                    <!-- Footer -->

                    @include('components.footer')

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
