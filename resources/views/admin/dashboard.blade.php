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

                        {{-- ! Cara penggunaan aplikasi --}}
                        <div class="col-md">
                            <div class="card shadow-none bg-transparent border border-primary">
                                <div class="card-header fs-xlarge fw-semibold">Cara Penggunaan Aplikasi</div>
                                <div class="card-body text-primary">
                                    <h5 class="card-title ">Tutorial</h5>
                                    <p class="card-text"> 1. Masuk ke menu "Data Pendaftar" </p>
                                    <p class="card-text"> 2. Lakukan pemrosesan </p>
                                    <p class="card-text"> 3. Terdapat beberapa kriteria yang digunakan untuk menentukan
                                        asisten
                                        pratikum. </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3">

                            {{-- ! Card Kriteria --}}
                            <div class="col-md">
                                <a href="#" class="card-link">
                                    <div class="card text-white bg-primary">
                                        <div class="card-header fs-xlarge fw-semibold">7 KRITERIA</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Kriteria</h5>
                                            <p class="card-text">
                                                Terdapat beberapa kriteria yang digunakan untuk menentukan asisten
                                                pratikum.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            {{-- ! Card Alternatif --}}
                            <div class="col-md">
                                <a href="#" class="card-link">
                                    <div class="card text-white bg-success">
                                        <div class="card-header fs-xlarge fw-semibold">32 ALTERNATIF</div>
                                        <div class="card-body">
                                            <h5 class="card-title text-white">Alternatif</h5>
                                            <p class="card-text">
                                                Alternatif merupakan mahasiswa yang mendaftar menjadi asisten pratikum
                                                secara keseluruhan.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        {{-- ! Card informasi --}}
                        <div class="col-md mb-3 mt-5">
                            <div class="card text-white bg-info">
                                <div class="card-header fs-large fw-semibold">INFORMASI</div>
                                <div class="card-body">
                                    <h5 class="card-title text-white">Hasil peringkat yang di peroleh</h5>
                                </div>
                            </div>
                        </div>

                        {{-- ! Tabel hasil ranking --}}
                        <div class="table-responsive">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; width:10%">Ranking</th>
                                        <th>Nama</th>
                                        <th style="text-align: center;">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">4.12</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td>Barry Hunter</td>
                                        <td style="text-align: center;">4.11</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3</td>
                                        <td>Trevor Baker</td>
                                        <td style="text-align: center;">4.09</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">4</td>
                                        <td>Jerry Milton</td>
                                        <td style="text-align: center;">4.08</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- ! Belum dilakukan perankingan --}}
                        {{-- <div class="empty-message">
                            <div>
                                <h4>Belum dilakukan perankingan</h4>
                                <p>Silahkan lakukan pemrosesan data terlebih dahulu</p>
                            </div>
                        </div> --}}

                    </div>

                    {{-- ! Footer --}}
                    @include('components.footer')

                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
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
