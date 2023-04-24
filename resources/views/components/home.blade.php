@extends('layouts.index')
@section('title','PROJECT - Home')
@push('styles')
    @include('layouts.head')
@endpush
@section('content')
    @include('layouts.mainslider')

{{-- @section('footer')
    @include('layouts.footer')
@endsection --}}



  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row">

                    <div class="col">
                        {{-- <img  src="assets/images/doctt.png" alt=""> --}}
                    </div>
                    <div class="col-6 center doc-det">
                        {{-- <h1 >&rdquo;</h1> --}}
                        <i class="fa fa-quote-left" style="font-size:36px" ></i>
                        <h4>The truth is that stress doesn't come from your boss, your kids, your spouse, traffic jams, health challenges or other circumstances. It comes from your thoughts about your cricumstances.</h4>
                        <i class="fa fa-quote-right" style="font-size:36px"></i>

                    </div>
                    <div class="col">
                        {{-- <img  src="assets/images/doctt.png" alt=""> --}}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
<!-- @section('footer')
    @include('layouts.footer')
@endsection -->

@push('scripts')
    @include('layouts.foot')
@endpush
