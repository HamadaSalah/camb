@extends('layouts.app')
@section('content')
<div class="MYP_page">
    <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>
    <div class="w-100 z-1">
        
        <img class="w-100" src="assets/images/Assets6.png" alt="">
    </div>

    <div class="second_color_bg margin-negative pb-5">
        <div class="container">
            <div class="row justify-content-end">
                <br>
                <div class="col-12 col-md-6 col-lg-3">
                    {{-- <img src="assets/images/IBDP.png" alt="" class="img-fluid rounded-3"> --}}
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
                <div class="col-12 col-md-12 col-lg-6 misimg">
                    <img src="{{asset($myp->sec1_img)}}" alt="" class="h-100 rounded-3">
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h2 class="pb-3 m-0">{!!$myp->sec1_head!!}</h2>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font">{!! $myp->sec1_p !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <div class="row flex-column-reverse flex-md-row-reverse flex-lg-row flex-xl-row flex-xxl-row h-100">
                    <div class="col-12 col-md-6 col-lg-6 mt-3 mt-md-0 mt-lg-0">
                        <img src="{{asset($myp->sec2_img)}}" alt="" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h3 class="pb-3">{!! $myp->sec2_head !!}</h3>
                <p class="pb-3 lh-lg m-0 Open_Sans_font">
                    {!! $myp->sec2_p !!}
                </p>
            </div>
        </div>
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <img src="{{asset($myp->sec3_img)}}" alt="" class="w-100 rounded-3">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-4">
                <h3 class="pb-3 lh-lg"> {!! $myp->sec3_head !!}</h3>
                <p class="pb-3 lh-lg m-0 Open_Sans_font">
                    {!! $myp->sec3_p !!}
                </p>
             </div>
        </div>
    </div>

    <div class="second_color_bg margin-negative py-5">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row flex-xl-row flex-xxl-row mt-5">
                <div class="col-12 col-md-12 col-lg-6 mt-4 misimg">
                    <img src="assets/images/Website pix/IBDP/5Q7C3512.jpg" alt="" class="h-100 rounded-3">
                </div>
                <div class="col-12 col-md-12 col-lg-6 mt-4">
                    <h2 class="pb-3 m-0 Open_Sans_font"> {!! $myp->sec4_head !!}</h2>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $myp->sec4_p !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 pb-5">
        <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse mt-5">

            <div class="col-12 mt-4">
                <h2 class="pb-3 m-0"> {!! $myp->sec4_head !!}</h2>

                <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                    {!! $myp->sec4_p !!}                </p>

                <div class="col-12 mt-4 misimg">
                    <img src=" {!! $myp->sec4_img !!}" alt="" style="width: 50%!important;display: block!important;margin: auto!important" class="h-50 w-100 rounded-3">
                </div>
            </div>
        </div>
    </div>

    <div class="second_color_bg margin-negative py-5">
        <div class="container mb-5">
            <div class="row flex-column-reverse flex-md-column-reverse flex-lg-row-reverse flex-xl-row-reverse flex-xxl-row-reverse">

                <div class="col-12 mt-4">
                    <h2 class="pb-3 m-0"> {!! $myp->sec5_head !!}</h2>

                    <p class="pb-3 lh-lg m-0 Open_Sans_font fw-semibold">
                        {!! $myp->sec5_p !!}
                    </p>
 
                    <div class="d-flex justify-content-end me-5 mt-5">
                        <a class="fs-7 py-1 px-4 first_color Open_Sans_font fw-bold text-capitalize rounded-2 hover_btn _borders "
                           href="https://test.cambridge.edu.jo/tuition-fees">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection