@extends('layouts.index')
@section('title','PROJECT - Individual')
@push('styles')
    @include('layouts.head')
@endpush
@section('content')



<div class="slider">
    <!-- Set up your HTML -->
    {{-- <div class="owl-carousel "> --}}
        <div class="slider-img">
        <div class="item">
                <div class="slider-img"> <img src="assets/images/slider/cover_page.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h6 class="slider-title">Check your level of stress & anxiety here. Help us match you to the right therapy </h6>
                                 <a href="{{route('individual_form')}}" class="btn btn-success btn-rounded">Get Started</a>

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

