<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rasel Rana</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  @include('frontend.partials.styles')

  <!-- =======================================================
  * Template Name: MyResume - v4.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  {{-- Navbar --}}
    @include('frontend.partials.navbar')

  <!-- ======= Hero Section ======= -->
  @include('frontend.partials.hero')   
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    {{-- about section --}}
    @include('frontend.pages.about')
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    {{-- Facts section --}}
    @include('frontend.pages.facts')    
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    @include('frontend.pages.skill')
    <!-- End Skills Section -->
    
    <!-- start projects -->
    @include('frontend.pages.projects')
    <!-- end projects -->

    <!-- ======= Resume Section ======= -->
    {{-- Resume section --}}
    @include('frontend.pages.resume')  
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- Portfolio section --}}
    @include('frontend.pages.portfolio')  
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- tetimonials section --}}
    @include('frontend.pages.tetimonials') 
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    {{-- Contact section --}}
    @include('frontend.pages.contact')
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- Footer section --}}
    @include('frontend.partials.footer')  
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('frontend.partials.scripts')
    <!-- @yield('scripts') -->

</body>

</html>