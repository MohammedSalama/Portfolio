<!DOCTYPE html>
<html lang="en">

@include('Frontend.head')

<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->

@include('Frontend.header')

<!-- End Header -->

@include('Frontend.hero-section')

<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->

    @include('Frontend.about-section')

    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->

   @include('Frontend.fact-section')

    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->

    @include('Frontend.skills-section')

    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->

    @include('Frontend.resume-section')

    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->

   @include('Frontend.portfolio')

    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->

    @include('Frontend.services-section')

    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->

    @include('Frontend.testimonials-section')

    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->

   @include('Frontend.contact-section')

    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

@include('Frontend.footer')

<!-- End  Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@include('Frontend.script')

</body>

</html>
