@extends('layouts.index')
@section('title', 'PROJECT - Contact')
@push('styles')
    @include('layouts.head')
@endpush
@section('breadcrumb')
    @include('layouts.pagetiltle', ['page' => 'contact'])
@endsection
@section('content')

    <!--  ************************* Page Title Starts Here ************************** -->
    {{-- <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Spinta Clinic</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <!-- ######## Page  Title End ####### -->


    <div style="margin-top:0px;" class="row no-margin">

        <!-- <iframe style="width:100%"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
                height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

        <iframe style="width:100%"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.8030993195362!2d79.88905203847426!3d6.817657598295012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25acc4a4a86e1%3A0x23e8b8390853ca4f!2sGeneral%20Sir%20John%20Kotelawala%20Defence%20University!5e0!3m2!1sen!2slk!4v1682394990074!5m2!1sen!2slk"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">
                <div style="padding:20px" class="col-sm-6">
                    <h2 style="font-size:18px">Contact Form</h2>
                    <form action="{{ route('contactus') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name"
                                    class="form-control input-sm" required></div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address"
                                    class="form-control input-sm" required></div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                            <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number"
                                    class="form-control input-sm" required></div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label>Enter Message:</label></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="message" required></textarea>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div style="margin:50px" class="serv">
                        <h2 style="margin-top:10px;">Address</h2>

                        General Sir John Kotelawala Defence University, <br>
                        Kandawala Road,<br>
                        Rathmalana 10390, Sri Lanka.<br>
                        Phone: +94-11-2635268<br>
                        {{-- Email:info@smart-eye.in<br> --}}
                        Website:www.kdu.ac.lk<br>
                    </div>
                </div>
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
