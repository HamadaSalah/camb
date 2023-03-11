@extends('layouts.app')
@section('content')
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
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap',
      events:  <?php echo $school_calender?>


     });
    calendar.render();
  });

</script>

@endsection