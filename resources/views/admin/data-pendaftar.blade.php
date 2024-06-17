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

                        <h3>Data Pendaftar</h3>

                        {{-- ! Search bar --}}
                        <div class="column mt-3" style="display: flex; justify-content: end;">
                            <div class="btn-group me-3">
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    placeholder="Search..." aria-describedby="defaultFormControlHelp" />
                            </div>
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                            <a class="btn btn-dark ms-2" type="button" href="{{ url('admin/perhitungan_spk') }}">Perhitungan SPK</a>
                        </div>

                        {{-- ! Tabel pendaftar --}}
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="">Nama</th>
                                        <th style="">Matakuliah dipilih </th>
                                        <th style="text-align: center;">IPK</th>
                                        <th style="text-align: center;">Tahun Angkatan</th>
                                        <th style="text-align: center;">Nilai</th>
                                        <th style="text-align: center;">Asal Prodi</th>
                                        <th>Status</th>
                                        <th style="text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Albert Cook</td>
                                        <td style="text-align: center;">Web Service Praktik</td>
                                        <td style="text-align: center;">3.51</td>
                                        <td style="text-align: center;">2020</td>
                                        <td style="text-align: center;">A</td>
                                        <td style="text-align: center;">Sistem Informasi</td>
                                        <td><span class="badge bg-label-warning">Pending</span></td>
                                        <td style="display: flex; justify-content: center; align-items: center;">
                                            <div class="column">
                                                <button type="button" class="btn btn-warning ms-auto" data-bs-toggle="modal"
                                                    data-bs-target="#basicModal">Update</button>

                                                {{-- * Modal --}}
                                                <div class="modal fade" id="basicModal" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel1">Edit
                                                                    Data Pendaftar</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <label for="nameBasic"
                                                                            class="form-label">Nama</label>
                                                                        <input type="text" id="nameBasic"
                                                                            class="form-control" placeholder="John Doe" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-2">
                                                                    <div class="col mb-3">
                                                                        <label class="form-label">Matakuliah</label>
                                                                        <br>
                                                                        <select id="currency"
                                                                            class="select2 form-select">
                                                                            <option value="" style="text-align: center">-- Pilih Matakuliah --
                                                                            </option>
                                                                            <option value=""></option>
                                                                            <option value=""></option>
                                                                            <option value=""></option>
                                                                            <option value=""></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col mb-3">
                                                                            <label for="dobBasic"
                                                                                class="form-label">IPK</label>
                                                                            <input type="number"
                                                                                class="form-control">
                                                                        </div>
                                                                        <div class="col mb-3">
                                                                            <label class="form-label">Angkatan</label>
                                                                            <br>
                                                                            <select id="currency"
                                                                                class="select2 form-select">
                                                                                <option value="" style="text-align: center">-- Pilih Tahun --
                                                                                </option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2020">2020</option>
                                                                                <option value="2019">2019</option>
                                                                                <option value="2018">2018</option>
                                                                                <option value="2017">Alumni - S1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col mb-3">
                                                                            <label class="form-label">Nilai
                                                                                Matakuliah</label>
                                                                            <br>
                                                                            <select id="currency"
                                                                                class="select2 form-select">
                                                                                <option value="" style="text-align: center">-- Pilih Nilai --
                                                                                </option>
                                                                                <option value=""></option>
                                                                                <option value=""></option>
                                                                                <option value=""></option>
                                                                                <option value="">
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col mb-3">
                                                                            <label class="form-label">Asal Prodi</label>
                                                                            <br>
                                                                            <select id="currency"
                                                                                class="select2 form-select">
                                                                                <option value="" style="text-align: center">-- Pilih Prodi --</option>
                                                                                <option value="SI">Sistem Informasi</option>
                                                                                <option value="IF">Informatika</option>
                                                                                <option value="TI">Teknologi Informasi</option>
                                                                                <option value="SD">Sains Data</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var dropdownItems = document.querySelectorAll('#dropdownMenuButton2 li');
            var output = document.getElementById('output2');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    output.textContent = this.textContent;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            var dropdownItems = document.querySelectorAll('#dropdownMenuButton3 li');
            var output = document.getElementById('output3');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    output.textContent = this.textContent;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            var dropdownItems = document.querySelectorAll('#dropdownMenuButton4 li');
            var output = document.getElementById('output4');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    output.textContent = this.textContent;
                });
            });
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            var dropdownItems = document.querySelectorAll('#dropdownMenuButton5 li');
            var output = document.getElementById('output5');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    output.textContent = this.textContent;
                });
            });
        });
    </script>

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
