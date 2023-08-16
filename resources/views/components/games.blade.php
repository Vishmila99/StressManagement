@extends('layouts.index')
@section('title','PROJECT - Games')
@push('styles')
    @include('layouts.head')
@endpush
@section('breadcrumb')
    @include('layouts.pagetiltle',['page' => 'games'])
@endsection
@section('content')


	<div class="mosion-vision">
  	    <div class="container">

  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
                    {{-- https://rubikscu.be/ --}}
  	                <a href="{{ route('puzzle') }}" target="_blank">
                        <div class="single-dd center" style="height: 200px;">
                            <h4>puzzle</h4>
                            <img src="assets/images/icons8-rubik's-cube-94.png" style="width: 100px; height: 100px;"></div>
                        </a>
  	            </div>
  	           <div class="col-lg-4 col-md-12">
                    {{-- https://poki.com/en/g/sweet-world --}}
  	                <a href="{{ route('sweetworld') }}" target="_blank">
                        <div class="single-dd center" style="height: 200px;">
                            <h4>Sweet World</h4>
                            <img src="assets/images/candy_crush.png" style="width: 100px; height: 100px;"></div>
                        </a>
  	            </div>

                <div class="col-lg-4 col-md-12">
                    {{-- https://www.bestgames.com/Paper-Toss --}}
  	                <a href="{{ route('papertoss') }}" target="_blank">
                        <div class="single-dd center" style="height: 200px;">
                            <h4>Paper Toss</h4>
                            <img src="assets/images/bin.png" style="width: 100px; height: 100px;"></div>
                        </a>
  	            </div>

  	        </div>
  	    </div>
  	</div>

    {{-- <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row pb-5">
                <iframe src="https://rubikscu.be/" name="iframe_a" height="500px" width="100%" title="Iframe Example"></iframe>
            </div>
            <div class="row pb-5">
                <iframe src="https://bubblespop.netlify.app/" name="iframe_a" height="500px" width="100%" title="Iframe Example"></iframe>
            </div>
            <div class="row pb-5">
                <iframe src="https://www.huol.net/" name="iframe_a" height="700px" width="100%" title="Iframe Example"></iframe>
            </div>


        </div>

    </div> --}}
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

@push('scripts')
    @include('layouts.foot')
@endpush
