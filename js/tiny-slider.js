$(document).ready(function () {
  var carousel = $("#tiny-carousel").waterwheelCarousel({
    flankingItems: 3,
  });

  $('#prev').bind('click', function () {
    carousel.prev();
    return false
  });

  $('#next').bind('click', function () {
    carousel.next();
    return false;
  });
});
  
