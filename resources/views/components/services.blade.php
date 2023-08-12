@extends('layouts.index')
@section('title','PROJECT - Program')
@push('styles')
    @include('layouts.head')
@endpush
@section('content')



<div class="slider">
    <!-- Set up your HTML -->
    {{-- <div class="owl-carousel "> --}}
        <div class="slider-img">
        <div class="item">
                <div class="slider-img"> <img src="{{ asset('assets/images/slider/slider-3.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Give your life gift of unconditional happiness.</h1>
                                <h4 class="slider-text hidden-xs">What type of theraphy are loking for?? </h4>

                                <div class="row">
                                    <div class="col-md-6">
                                <a href="{{route('individual')}}" class="btn btn-success btn-rounded"> Individual for myself</a>

                                    </div>
                                    <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-rounded">Couples for me and my partner</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>


@endsection
@section('footer')
    @include('layouts.footer')
@endsection


@push('scripts')
    @include('layouts.foot')
@endpush
