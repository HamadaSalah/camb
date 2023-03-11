@extends('layouts.app')
@section('content')
<div class="Media_page">
    <div class="px-3 py-5 rounded-3">
        <div class="text-container padding-start ps-0 ps-md-5 ps-lg-5 ps-xl-5 ps-xxl-5 pt-5 text-center text-md-start text-lg-start">
            <h2 class="text-uppercase fw-bold text-uppercase pb-4">logos and media</h2>
        </div>
        <div class="main_color_bg d-none d-sm-none d-md-block w-50 shape-line">
        </div>
        <div class="ms-5 d-none d-sm-none d-md-block mt-3">
            <div class="main_color_bg w-50 shape-line">
            </div>
        </div>
        <p class="pt-4 ps-2 ps-md-5 ps-lg-5 pe-2 pe-md-5 pe-lg-5 Open_Sans_font text-center text-md-start text-lg-start fw-semibold">
            For application of the logos and programme models provided below.
        </p>
    </div>

    <div class="container mb-5 pb-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 d-flex flex-column flex-md-row flex-lg-row align-items-center justify-content-between mb-4">
                <div class="img-content">
                    <img src="/assets/images/Logo-Rad.png" alt="" class="imf-fluid media-width">
                    <div style="height: 0.15rem;" class="main_color_bg rounded-pill mt-3 media-width">
                    </div>
                </div>
                <div class="text-content">
                    <div class="text-center mt-4 mt-md-0 mt-lg-0">
                        <h4 class="text-dark m-0 fs-3 Open_Sans_font">
                            Cambridge High school logo - Rad
                        </h4>
                    </div>
                </div>
                <div class="download-content">
                    <button class="btn d-flex align-items-center mt-4 mt-md-0 mt-lg-0 gap-2 fs-2">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <a href="/assets/images/Logo-Rad.png" download><span class="text-uppercase Open_Sans_font fw-semibold">png</span></a>                    </button>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 d-flex flex-column flex-md-row flex-lg-row align-items-center justify-content-between mb-4">
                <div class="img-content">
                    <img src="/assets/images/IBDP.png" alt="" class="imf-fluid media-width" style="width: 300px">
                    <div style="height: 0.15rem;" class="main_color_bg rounded-pill mt-3 media-width">
                    </div>
                </div>
                <div class="text-content">
                    <div class="text-center mt-4 mt-md-0 mt-lg-0">
                        <h4 class="text-dark m-0 fs-3 Open_Sans_font">
                            IBDP
                        </h4>
                    </div>
                </div>
                <div class="download-content">
                    <button class="btn d-flex align-items-center mt-4 mt-md-0 mt-lg-0 gap-2 fs-2">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <a href="/assets/images/IBDP.png" download><span class="text-uppercase Open_Sans_font fw-semibold">png</span></a>                    </button>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 d-flex flex-column flex-md-row flex-lg-row align-items-center justify-content-between mb-4">
                <div class="img-content">
                    <img src="/assets/images/sc.png" alt="" class="imf-fluid media-width">
                    <div style="height: 0.15rem;" class="main_color_bg rounded-pill mt-3 media-width">
                    </div>
                </div>
                <div class="text-content">
                    <div class="text-center mt-4 mt-md-0 mt-lg-0">
                        <h4 class="text-dark m-0 fs-3 Open_Sans_font">
                            Book Cover
                        </h4>
                    </div>
                </div>
                <div class="download-content">
                    <button class="btn d-flex align-items-center mt-4 mt-md-0 mt-lg-0 gap-2 fs-2">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <a href="/assets/images/sc.png" download><span class="text-uppercase Open_Sans_font fw-semibold">png</span></a>
                    </button>
                </div>
            </div>
         </div>
    </div>
</div>
 @endsection