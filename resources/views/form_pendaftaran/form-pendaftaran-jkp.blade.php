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

            @include('components.sidebar', ['clicked' => 'active', 's' => 'pendaftaran'])

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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{ url('pendaftaran') }}">Daftar Matakuliah</a> /</span> Form Pendaftaran Jaringan Komputer Praktik</h4>

                        <form action="">
                            <div class="card mb-4">
                                <div class="card header m-4">
                                    <h5>Data diri pendaftar</h5>
                                </div>
                                <div class="card body me-4 ms-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Nama
                                                    Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="contoh9@gmail.com"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="pilih2" class="form-label">Pernah Asistensi?</label>
                                                <select class="form-select" id="pilih2" name="pilih2"
                                                    aria-label="Default select example">
                                                    <option selected class="text-center">-- Pilih --</option>
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload Bukti Surat Asistensi</label>
                                                <input class="form-control" type="file" id="formFile" />
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="ipk" class="form-label">IPK</label>
                                                <input type="number" class="form-control" id="ipk" name="ipk"
                                                    placeholder="3.XX" aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="semester" class="form-label">Semester</label>
                                                <select class="form-select" id="semester" name="semester"
                                                    aria-label="Default select example">
                                                    <option selected class="text-center">-- Pilih --</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">Alumni - S1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="nilai" class="form-label">Nilai Matakuliah</label>
                                                <select class="form-select" id="nilai" name="nilai"
                                                    aria-label="Default select example">
                                                    <option selected class="text-center">-- Pilih --</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="prodi" class="form-label">Asal Prodi</label>
                                                <select class="form-select" id="prodi" name="prodi"
                                                    aria-label="Default select example">
                                                    <option selected class="text-center">-- Pilih --</option>
                                                    <option value="SI">Sistem Informasi</option>
                                                    <option value="IF">Informatika</option>
                                                    <option value="SD">Sains Data</option>
                                                    <option value="TK">Teknik Komputer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end mb-4">
                                        <button type="button"
                                            class="btn rounded-pill btn-primary col-md-2 me-2">SIMPAN</button>
                                    </div>

                                </div>
                            </div>
                        </form>
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
