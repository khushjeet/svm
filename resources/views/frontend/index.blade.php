{{-- header Started here--}}

@include('frontend.layout.header')

{{-- header End here --}}
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        @include('frontend.layout.navbar')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('frontend.layout.carousel')
        <!-- Carousel End -->


        <!-- Facilities Start -->
        @include('frontend.layout.facilities')
        <!-- Facilities End -->

        {{-- *****************Administrative************** --}}
        @include('frontend.layout.school_adminstrative')


        <!-- About Start -->

        @include('frontend.layout.about')
        <!-- About End -->


        <!-- Call To Action Start -->

        @include('frontend.layout.call_action')
        <!-- Call To Action End -->




        <!-- Classes Start -->
        @include('frontend.layout.classes')
        <!-- Classes End -->



        <!-- Appointment Start -->
        @include('frontend.layout.appointment')
        <!-- Appointment End -->


        <!-- Team Start -->
        @include('frontend.layout.team')
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include('frontend.layout.testimonial')
        <!-- Testimonial End -->


        <!-- Footer Start -->
            @include('frontend.layout.footer')

    <!-- JavaScript Libraries -->
        @include('frontend.layout.jsfile')
</body>

