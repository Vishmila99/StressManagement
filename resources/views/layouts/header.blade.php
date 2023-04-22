<!-- ################# Header Starts Here#######################--->

<header id="menu-jk">
    <nav  class="">
        <div class="container">
            <div class="row nav-ro">
               <div class="col-lg-3 col-md-4 col-sm-12">
                   <img src="assets/images/logo.jpg" alt="">
                   <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
               </div>
               <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                   <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        {{-- <li><a href="{{route('')}}">Blog</a></li>
                        <li><a href="{{route('')}}">Gallery</a></li> --}}
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
               </div>
               <div class="col-sm-2 d-none d-lg-block">
                   <button class="btn btn-success">Book an Appointment</button>
               </div>
            </div>
        </div>
    </nav>
</header>
