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
            @include('admin.components.sidebar', ['clicked' => 'active', 's' => 'data_pendaftar'])

            {{-- ! Layout container --}}
            <!-- Layout container -->
            <div class="layout-page">

                {{-- ! Navbar --}}
                @include('admin.components.navbar')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <h3><a class="text-secondary" href="{{ url('admin/proses') }}">Hasil Perhitungan Berdasarkan Matakuliah</a> / Detail Perhitungan</h3>

                        {{-- ! Keputusan dari rekomendasi --}}
                        {{-- <a class="btn btn-dark ms-2" type="button" href="{{ url('admin/keputusan') }}">Keputusan</a> --}}

                        {{-- ! Pemetaan Bobot --}}
                        <div class="table-responsive mt-5">
                            <div><h4>Bobot nilai kriteria</h4></div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Pendaftar</th>
                                  <th>Nilai Matakuliah</th>
                                  <th>IPK</th>
                                  <th>Program Studi</th>
                                  <th>Asistensi</th>
                                  <th>Semester</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>1.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr class="text-danger">
                                  <td class="text-primary" colspan="2" style="text-align: center"><b>Profile Ideal</b></td>
                                  <td>3</td>
                                  <td>2</td>
                                  <td>3</td>
                                  <td>2</td>
                                  <td>2</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          {{-- ! Pemetaan GAP --}}
                          <div class="table-responsive mt-5">
                            <div><h4>Pemetaan Gap</h4></div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Pendaftar</th>
                                  <th>Nilai Matakuliah</th>
                                  <th>IPK</th>
                                  <th>Program Studi</th>
                                  <th>Asistensi</th>
                                  <th>Semester</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>1.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          {{-- ! Pemetaan Secondary & Core Factor --}}
                          <div class="table-responsive mt-5">
                            <div><h4>Persentase Secondary & Core Factor</h4></div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>No.</th>
                                  <th>Pendaftar</th>
                                  <th>Core Factor</th>
                                  <th>Secondary Factor</th>
                                  <th>Nilai Akhir</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">Angular Project</span></td>
                                  <td>Albert Cook</td>
                                  <td>
                                    <p>Hello</p>
                                  </td>
                                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                                  <td>
                                    <p>hello</p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        {{-- ! Data kosong --}}
                        {{-- <div class="empty-message">
                            <div>
                                <h4>Pendaftaran belum dibuka</h4>
                                <p>Belum ada yang bisa ditampilkan</p>
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
