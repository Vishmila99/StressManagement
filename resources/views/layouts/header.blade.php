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
                        {{-- <li><a href="{{route('services')}}">Services</a></li> --}}
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        {{-- <li><a href="/blog">Blog</a></li> --}}
                        <li><a href="{{route('contact')}}">Contact Us</a></li>

                        @guest

                        <li class="btn btn-success" type="button">
                            <a href="{{ route('user.login') }}"> Login </a>
                             {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('user.login') }}"
                                    class="dropdown-item text-sm text-gray-700 dark:text-gray-500 underline">User Log in</a>
                                <a href="{{ route('doctor.login') }}"
                                    class="dropdown-item text-sm text-gray-700 dark:text-gray-500 underline">Doctor Log
                                    in</a>
                                <a href="{{ route('admin.login') }}"
                                    class="dropdown-item text-sm text-gray-700 dark:text-gray-500 underline">Admin Log
                                    in</a>
                            </div> --}}
                        </li>

                        <li class="btn btn-success" type="button" >
                            <a  href="{{ route('register') }}">Signup</a></li>

                        @endguest
                    </ul>
               </div>
               <div class="col-sm-2 d-none d-lg-block ">
                   <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Urgent Help</button>
               </div>


            </div>
@include('layouts.modal')
        </div>

    </nav>

</header>
