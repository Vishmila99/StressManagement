@extends('layouts.index')
@section('title','abc')
@section('content')
    @include('layouts.mainslider')

    <section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Our Services</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-1.jpg" alt="">

							<div class="blog-single-det">

								<h6>Deperssion</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-2.jpg" alt="">

							<div class="blog-single-det">

								<h6>Anxity</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/services/service-3.jpg" alt="">

							<div class="blog-single-det">

								<h6>Relationship Issue</h6>
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

  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="assets/images/doctt.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>Hello, I’m Doctor Sanjay</h2>
                        <span>Expert Clinical Psychologist in Manhattan</span>

                        <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                        <h4>Call me on : +123 98 8887</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

 	<!-- ################# Our Session Starts Here#######################--->

  	<section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Session Types</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-3 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-1.jpg" alt="">
  	                    <p>Individual Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-3 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-2.jpg" alt="">
  	                    <p>Cuple Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-3 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-3.jpg" alt="">
  	                    <p>online Session</p>
  	                </div>
  	            </div>
  	            <div class="col-md-3 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>Start Your Session today</h4>
  	                    <p>Take the first step on your journey to feeling better. </p>
  	                    <button class="btn btn-success">Book an Appointment</button>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
@endsection
