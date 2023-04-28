@extends('layouts.app')

@section('content')

<div class=" ">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            @foreach ($sliders as $key =>  $slider )
                <div class="carousel-item <?php if($key==0) echo 'active'; ?> ">
                    <div class="container">
                        <div class="row    mb-5">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="  Open_Sans_font second_color  pb-3 m-0 f_slider">
                                    <h5>{!! $slider->top_head!!}</h5>
                                    <br>
                                        <div>
                                            <p class="pe-5 second_color " style="font-size: 21px;font-family: 'Open Sans', sans-serif;">
                                                {!!$slider->head!!}
                                            </p>
                                        </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 ">
                                <img class="w-100" src="{{asset($slider->img)}}" alt="">
                            </div>
                        </div>
        
                    </div>
                </div>
            @endforeach
        </div>
        <button class="adw" style="position: absolute;left: 10%;top: 68%;" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

          </button>
          <button class="dwa" style="position: absolute;left: 15%;top: 68%;"  type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>

          </button>
  

      </div>
</div>


<div class="w-100 mt-5">
    <img class="w-100" src="assets/images/Assets8.png" alt="">
</div>


<div class="events second_color_bg margin-negative py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h1 class="text-uppercase text-capitalize fw-bold first_color pb-4 m-0">
                        Upcoming Events
                    </h1>
                    <div class="ps-2 pb-4">
                        <h2 class="text-uppercase text-capitalize fw-bold first_color pb-2 m-0">
                            december 2023
                        </h2>
                        <span class="fw-semibold">
                            Everything you need to know each month.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="row">
                    @foreach ($cards as $card)
                        <div class="col-6 col-md-4 col-lg-4 mb-4">
                            <a class="card rounded-2 main_color_bg px-3" style="height: 14rem;" href="#">
                                <div class="white_bg rounded-1 p-2 mt-3 text-center">
                                    <h6 class="text-capitalize">
                                        {{$card->date}}
                                    </h6>
                                </div>
                                <div class="card-body px-0 py-3 text-white">
                                    <p class="card-title"> {{$card->title}}</p>
                                    <span class="card-text fs-7"> {{$card->example}}</span>
                                </div>
                            </a>
                        </div>                        
                    @endforeach

                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="your-class Open_Sans_font second_color pb-3 m-0">
                    @foreach ($eventgall as $item)
                    <img class="rounded-2 h-100" style="height: 470px!important" src="{{asset($item->img)}}"
                    alt="Event Photo">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
 
 <div class="calendar min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 
                                     
                <div class="vanilla-calendar">
                    <div id='calendar' class="mt-5"></div>
                    <img src="{{asset('assets/images/cal_tt.png')}}" class="img-response" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



{{-- @dd($school_calender) --}}
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap',
      events: <?php echo $school_calender?>

     });
    calendar.render();
  });

</script>

 @endsection
