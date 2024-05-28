<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charts / ApexCharts - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/assets/img/favicon.png" rel="icon">
    <link href="/assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center" style="background: #053070">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="/assets/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block" style="color: white">P3M</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn" style="color: white"></i>
        </div><!-- End Logo -->

        <span style="width: 120px">
            <div>
                <div type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                    Dashboard
                </div>
            </div>
        </span>

        <span style="width: 130px">
            <div class="dropdown-center">
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    style="color: white">
                    Monitoring
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Usulan Reguler</a></li>
                    <li><a class="dropdown-item" href="#">Perbaikan Usulan</a></li>
                    <li><a class="dropdown-item" href="#">Catatan harian</a></li>
                    <li><a class="dropdown-item" href="#">Laporan Kemajuan</a></li>
                    <li><a class="dropdown-item" href="#">Laporan Akhir</a></li>
                    <li><a class="dropdown-item" href="#">Usulan Prototipe</a></li>
                    <li><a class="dropdown-item" href="#">Usulan Kosabangsa Kolaborasi</a></li>
                    <li><a class="dropdown-item" href="#">Monev internal PT</a></li>
                    <li><a class="dropdown-item" href="#">Minat katalis</a></li>
                </ul>
            </div>
        </span>


        <span>
            <div class="dropdown-center">
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    style="color: white">
                    Data Pendukung
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile Lembaga</a></li>
                    <li><a class="dropdown-item" href="#">Cari akun</a></li>
                    <li><a class="dropdown-item" href="#">Singkronasi Prodi</a></li>
                    <li><a class="dropdown-item" href="#">Singkronasi Dosen</a></li>
                </ul>
            </div>
        </span>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="/assets/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2" style="color: white">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

        </ul>

    </aside><!-- End Sidebar-->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/assets/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/assets/vendor/quill/quill.js"></script>
    <script src="/assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/assets/js/main.js"></script>

</body>

</html>
