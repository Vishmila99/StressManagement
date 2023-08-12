@extends('layouts.index')
@section('title','PROJECT - Contact')
@push('styles')
    @include('layouts.head')
@endpush
@section('breadcrumb')
    @include('layouts.pagetiltle',['page' => 'Games'])
@endsection
@section('content')


    <div class="row contact-rooo no-margin">
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

    </div>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

@push('scripts')
    @include('layouts.foot')
@endpush
