
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="index.html" class="navbar-brand">
        <h1>
            <img  src="{{asset('frontend/img/svmlogo.png')}}" width="200px">
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="{{route('bth.home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('bth.about')}}" class="nav-item nav-link">About Us</a>
            <a href="{{route('bth.school_facilities')}}" class="nav-item nav-link">School Facilities</a>
            <a href="{{route('bth.testimonial')}}" class="nav-item nav-link">Testimonial</a>
            <a href="{{route('bth.popular_teacher')}}" class="nav-item nav-link">Popular Teachers</a>
            <a href="{{route('bth.classes')}}" class="nav-item nav-link">Classes</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">

                    <a href="{{route('login')}}" class="dropdown-item">As Admin</a>

                </div>
            </div>
            <a href="{{route('bth.contact_us')}}" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>

