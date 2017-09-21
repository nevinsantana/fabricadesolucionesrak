function menuToggler() {
  $(".fa.active").fadeOut(100, function() {
    $(".fa").not(".active").fadeIn(100, function() {
      $(this).addClass('active');
    });
    $(this).removeClass('active');
  });
  if($(".menu-modal").hasClass('active')) {
    $("body").removeClass('noscroll');
    $(".menu-modal").fadeOut(200, function() {
      $(this).removeClass('active');
    });
  }
  else {
    $("body").addClass('noscroll');
    $(".menu-modal").fadeIn(200, function() {
      $(this).addClass('active');
    });
  }
}

$(".menu-selecter").click(menuToggler);
$("[id*=to]").click(function(){
  var to = $(this).attr("id");
  $('html,body').animate({
    scrollTop: $("[data-scroll="+to+"]").offset().top
  });
  menuToggler();
});