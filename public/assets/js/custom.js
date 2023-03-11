$(document).ready(function(){
    $(".fc-day").hover(function(){
      $(this).find(".fc-event-title").css("display", "block");
      }, function(){
        $(this).find(".fc-event-title").css("display", "none");
    });
  });
