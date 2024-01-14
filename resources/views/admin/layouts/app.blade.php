<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OR / Office des Routes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="  {{asset('assets/img/favicon.png')}} " rel="icon">
  <link href="  {{asset('assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="  {{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/boxicons/css/boxicons.min.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/quill/quill.snow.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/quill/quill.bubble.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/remixicon/remixicon.css')}} ">
  <link rel="stylesheet" href="  {{asset('assets/vendor/simple-datatables/style.css')}} ">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="  {{asset('assets/css/style.css')}} ">


  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    <!-- Inclure les fichiers CSS de Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <!-- Inclure jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Inclure le fichier JavaScript de Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>

<body>

    @include('admin.partials.header')

    @include('admin.partials.sidebar')

  <main id="main" class="main">

    @yield('content')



  </main><!-- End #main -->

  @include('admin.partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src={{asset ('assets/vendor/apexcharts/apexcharts.min.js')}}></script>
  <script src={{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
  <script src={{asset ('assets/vendor/chart.js/chart.min.js')}}></script>
  <script src={{asset ('assets/vendor/echarts/echarts.min.js')}}></script>
  <script src={{asset ('assets/vendor/quill/quill.min.js')}}></script>
  <script src={{asset ('assets/vendor/simple-datatables/simple-datatables.js')}}></script>
  <script src={{asset ('assets/vendor/tinymce/tinymce.min.js')}}></script>
  <script src={{asset ('assets/vendor/php-email-form/validate.js')}}></script>

  <!-- Template Main JS File -->
  <script src={{asset ('assets/js/main.js')}}></script>
  @yield('scripts')

</body>

</html>