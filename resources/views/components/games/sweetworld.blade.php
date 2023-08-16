@extends('layouts.index')
@section('title','PROJECT - Games')
@push('styles')
    @include('layouts.head')
@endpush
@section('breadcrumb')
    @include('layouts.pagetiltle',['page' => 'games','secondpage'=>'sweetworld'])
@endsection
@section('content')

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <iframe src="https://www.huol.net/" name="iframe_a" height="400px" width="100%" title="Iframe Example"></iframe>
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
