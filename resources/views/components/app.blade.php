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
            {{-- <i class="bi bi-list toggle-sidebar-btn" style="color: white"></i> --}}
        </div><!-- End Logo -->

        <span style="width: 120px">
            <div>
                <div type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                    Dashboard
                </div>
            </div>
        </span>



        <x-template.monitoring />
        <x-template.data_pendukung />
        <div class="content">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>
        <x-template.sidebar />
        <x-template.navbar />

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->



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
