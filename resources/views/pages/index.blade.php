<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FORCA.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img\logo.jpg') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>


<body>

 <!-- ======= Header ======= -->
  @include('common_componets.header(main)')
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('componets.hero_section')
  <!-- End Hero section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('componets.about')
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    @include('componets.clients(swiper)')
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    @include('componets.features')
    <!-- End Features Section -->

   <!-- ======= Services Section ======= -->
   @include('componets.services')
   <!-- End Services Section -->

   <!-- ======= Cta Section ======= -->
   @include('componets.cta')
   <!-- End Cta Section -->



   <!-- ======= Counts Section ======= -->
   @include('componets.counts')
   <!-- End Counts Section -->

   <!-- ======= Testimonials Section ======= -->
   @include('componets.testimonial')
   <!-- End Testimonials Section -->

   <!-- ======= Team Section ======= -->
   @include('componets.team')
   <!-- End Team Section -->

   <!-- ======= Contact Section ======= -->
   @include('componets.contact')
   <!-- End Contact Section -->

  </main>
  <!-- End #main -->


  <!-- ======= Footer ======= -->
  @include('common_componets.footer')
  <!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  
  <!-- CDN JS Files -->

  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js') }}"></script>

  
</body>

</html>