@extends('layouts.index')
@section('title','PROJECT - About')
@push('styles')
    @include('layouts.head')
@endpush
@section('breadcrumb')
    @include('layouts.pagetiltle',['page' => 'about'])
@endsection
@section('content')

     <!--  ************************* Page Title Starts Here ************************** -->
               {{-- <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>@yield('title')</h2>
                           <ul>
                               <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i> About Us</li>
                           </ul>
                       </div>
                   </div>
               </div> --}}

               {{-- @include('layouts.pagetiltle') --}}

         <!-- ######## Page  Title End ####### -->


        	<!-- ################# Mission Vision Starts Here#######################--->

  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg col-md-6">
  	                <div class="single-dd">
  	                    <h4>OUR VISION</h4>
  	                    <p>A community that nurtures and inspires all members to pursue their fullest potential.</p>


  	                </div>
  	            </div>
  	            <div class="col-lg col-md-6">
  	                 <div class="single-dd">
  	                    <h4>OUR MISSION</h4>
  	                    <p>To promote tealth, engagement and success.</p>


  	                </div>
  	            </div>
  	            {{-- <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    <p>Effective Psychological Therapy with a minimum of 5 years post qualification experience. </p>

  	                    <p>Ipsum is simply text of the Lorem Ipsum is simply my text of ply text</p>

  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum f the Lorem Ipsum is simply my text of ply text </p>


  	                </div>
  	            </div> --}}
  	        </div>
  	    </div>
  	</div>

     <!--  ************************* About Us Content Start Here  ************************** -->
            <div class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="assets/images/aboout.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p> Psychology is an independent nonprofit that runs one of the world's leading mental health websites. Each month, millions of people from all around the world turn to us for trustworthy guidance they can use to strengthen their mental health and well-being, navigate challenges, and make healthy changes in their lives.</p>

                        </div>
                    </div>

                </div>
            </div>

        <!-- ######## About US End ####### -->
                <div class="col-sm-12 counsellor">
                    <h2 class="page-title">Our Counsellors</h2>
                </div>
                <div class="no-margin row justify-content-center">
                    @foreach ($doctors as $doctor)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="profile.html"><img alt="" src="assets/images/about/doctor-03.jpg"></a>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{ $doctor->name }}</a></h4>
                            <div class="user-country">
                                <i class=""></i> {{$doctor -> position_1}}
                            </div>
                             <div class="user-country">
                                <i class=""></i> {{$doctor -> position_2}}
                            </div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{$doctor -> hospital}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>


                {{-- <div class="stories">
                    <div class="col-sm-12 counsellor">
                    <h2 class="page-title">Our Success Stories</h2>
                </div>
                <section class="our-blog container-fluid">
  		<div class="container">
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-sm-4 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_1.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_2.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_3.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
  				</div>
  			</div>

  		</div>
       </section>
  	</div> --}}
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

@push('scripts')
    @include('layouts.foot')
@endpush
