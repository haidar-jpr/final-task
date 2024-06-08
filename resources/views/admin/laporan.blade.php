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
            height: 60vh;
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
            @include('admin.components.sidebar', ['clicked' => 'active', 's' => 'laporan'])

            {{-- ! Layout container --}}
            <!-- Layout container -->
            <div class="layout-page">

                {{-- ! Navbar --}}
                @include('admin.components.navbar')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <h3>Laporan Pendaftaran</h3>

                        {{-- ! Button Group --}}
                        <div class="column mb-3">
                            {{-- * Status mahasiswa --}}
                            <div class="btn-group me-3">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status Mahasiswa
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item">Mahasiswa diterima</li>
                                    <li class="dropdown-item">Semua Pendaftar</li>
                                </ul>
                            </div>
                            {{-- * Matakuliah yang dipilih --}}
                            <div class="btn-group me-3">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Matakuliah
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item">Pemrograman Berorientasi Object Praktik</li>
                                    <li class="dropdown-item">Web Service Praktik</li>
                                    <li class="dropdown-item">Design Web</li>
                                    <li class="dropdown-item">Design Web Lanjut</li>
                                    <li class="dropdown-item">Pemrograman Berorientasi Object Lanjut Praktik</li>
                                </ul>
                            </div>
                            {{-- * Cetak laporan --}}
                            <button type="button" class="btn btn-warning">Cetak Laporan</button>
                        </div>

                        {{-- ! Tabel laporan --}}
                        <div class="table-responsive">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="">Nama</th>
                                        <th style="">Matakuliah</th>
                                        <th style="text-align: center;">IPK</th>
                                        <th style="text-align: center;">Semester</th>
                                        <th style="text-align: center;">Nilai</th>
                                        <th style="text-align: center;">Asal Prodi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">Web Service Praktik</td>
                                        <td style="text-align: center;">3.51</td>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: center;">A</td>
                                        <td style="text-align: center;">Sistem Informasi</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">Web Service Praktik</td>
                                        <td style="text-align: center;">3.51</td>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: center;">A</td>
                                        <td style="text-align: center;">Sistem Informasi</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">3</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">Web Service Praktik</td>
                                        <td style="text-align: center;">3.51</td>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: center;">A</td>
                                        <td style="text-align: center;">Sistem Informasi</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">4</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">Web Service Praktik</td>
                                        <td style="text-align: center;">3.51</td>
                                        <td style="text-align: center;">6</td>
                                        <td style="text-align: center;">A</td>
                                        <td style="text-align: center;">Sistem Informasi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {{-- ! Data kosong --}}
                        {{-- <div class="empty-message">
                            <div>
                                <h4>Data Kosong</h4>
                                <p>Belum ada yang bisa dilaporkan</p>
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
