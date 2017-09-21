$("#map-section").click(function(e) {
  $(this).fadeOut(100);
});
$(".map-section iframe").mouseleave(function(event) {
  $("#map-section").fadeIn(100);
});