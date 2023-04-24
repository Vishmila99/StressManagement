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


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="assets/images/doctt.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>Hello, I’m Doctor Sanjaya</h2>
                        <span>Expert Clinical Psychologist in Manhattan</span>

                        <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                        <h4>Call me on :0748700869</h4>
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
