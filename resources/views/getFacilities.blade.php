@extends('layouts.app')
@section('content')
<div class="Facility_Library_page">
    <div class="px-3 py-5 rounded-3">
        <div
            class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 pt-5 text-center text-md-start text-lg-start">
            <h2 class="text-uppercase fw-bold text-uppercase pb-4">Arabic poetic performance
            </h2>
        </div>
        <div class="main_color_bg d-none d-sm-none d-md-block w-50 shape-line">
        </div>
        <div class="ms-5 d-none d-sm-none d-md-block mt-3">
            <div class="main_color_bg w-50 shape-line">
            </div>
        </div>
        <p
            class="pt-4 ps-2 ps-md-5 ps-lg-5 pe-2 pe-md-5 pe-lg-5 Open_Sans_font text-center text-md-start text-lg-start fw-semibold" style="font-weight: bold">
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
            <strong><center>كانت لنا وداً على الاكباد &nbsp;&nbsp;&nbsp; &nbsp;لغة اذا وقعت على أسماعنا </center></strong>
         </p>
    </div>

    <div class="library-gallery">
        <div class="container my-5 pb-5">
            {{-- <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C3337.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C9948.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C3337.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C9948.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C3337.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C9948.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C3337.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="{{ asset('assets/images/Website pix/5Q7C5856.JPG') }}"
                        alt="photo" class="img-fluid rounded-3 overflow-hidden">
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <img src="assets/images/Website pix/5Q7C9948.JPG" alt="photo"
                        class="img-fluid rounded-3 overflow-hidden">
                </div>
            </div> --}}
            <img src="{{asset('assets/images/facc.png')}}" width="100%" class="img-responsive" alt="">
        </div>
    </div>
</div>
@endsection