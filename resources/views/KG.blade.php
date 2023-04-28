@extends('layouts.app')
@section('content')
<div class="primary_page">
<div class="w-100 z-1">
    <img class="w-100" src="assets/images/Assets.png" alt="">
</div>

<div class="container pb-5">
    <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse pt-5">
        <div class="col-12 col-md-12 col-lg-6 misimg">
            <img src="{{asset($kg->sec1_img)}}" alt="" class="h-100 rounded-3">
        </div>
        <div class="col-12 col-md-12 col-lg-6 mt-4">
            <h2 class="pb-3 m-0">{!!$kg->sec1_head!!}</h2>

            <p class="pb-3 lh-lg m-0 Open_Sans_font">
                {!!$kg->sec1_p!!}            </p>
        </div>
    </div>
</div>

<div class="second_color_bg py-5">
    <div class="container">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{{asset($kg->sec2_img)}}" alt="" class="img-fluid rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h3 class="pb-3">{!!$kg->sec2_head!!}</h3>
                <p class="pb-3 lh-lg m-0 Open_Sans_font">
                    {!!$kg->sec2_p!!}                </p>
            </div>
        </div>
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{{asset($kg->sec3_img)}}" alt="" class="w-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h3 class="pb-3 lh-lg">{!!$kg->sec3_head!!}</h3>
                <p class="pb-3 lh-lg m-0 Open_Sans_font">
                    {!!$kg->sec3_p!!}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
            <img src="{{asset($kg->sec4_img)}}" alt="" class="h-100 rounded-4">
        </div>
        <div class="col-12 col-md-12 col-lg-6 mt-4">
            <h2 class="pb-3 m-0 Open_Sans_font">{!!$kg->sec4_head!!}</h2>

            <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                {!!$kg->sec4_p!!}            </p>
        </div>
    </div>
    <div class="d-flex justify-content-end me-5 mt-5">
        <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders " href="http://camb.test/apply-now">APPLY NOW</a>
    </div>
</div>
</div>
@endsection