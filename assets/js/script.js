function scroller(){
  var
  topa=$("#top-a").offset().top,
  topb=$("#top-b").offset().top,
  topc=$("#top-c").offset().top,
  topd=$("#top-d").offset().top,
  tope=$("#top-e").offset().top + 300;
  $(document).ready(function(){ $("body").jKit(); });

  $("#clc1").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-a").offset().top}, 500);
  });
  $("#clc2").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-b").offset().top}, 500);
  });
  $("#clc2-2").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-b").offset().top}, 500);
  });
  $("#clc3").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-c").offset().top}, 500);
  });
  $("#clc4").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-d").offset().top}, 500);
  });
  $("#clc5").on("click", function(){
    $("html,body").animate({scrollTop:$("#top-e").offset().top}, 500);
  });

  $(window).scroll(function(){
    var scrollBottom=$(document).height()-($(window).scrollTop()+$(window).height());
    if($(window).scrollTop()>=topb)
      $("#clc1 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc1 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if($(window).scrollTop()>=topc)
      $("#clc2 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc2 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if($(window).scrollTop()>=topd)
      $("#clc3 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc3 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if(scrollBottom<=200)
      $("#clc4 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc4 i").removeClass("fa-circle-thin").addClass("fa-circle");
  });

  $(document).ready(function(){
    var scrollBottom=$(document).height()-($(window).scrollTop()+$(window).height());
    if($(window).scrollTop()>=topb)
      $("#clc1 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc1 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if($(window).scrollTop()>=topc)
      $("#clc2 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc2 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if($(window).scrollTop()>=topd)
      $("#clc3 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc3 i").removeClass("fa-circle-thin").addClass("fa-circle");
    if(scrollBottom<=200)
      $("#clc4 i").removeClass("fa-circle").addClass("fa-circle-thin");
    else $("#clc4 i").removeClass("fa-circle-thin").addClass("fa-circle");
  });
}
function popoverer(){
  $("#crear").popover({ content: "Crear", trigger: "hover", });
  $("#conectar").popover({ content: "Conectar", trigger: "hover", });
  $("#comunicar").popover({ content: "Comunicar", trigger: "hover", });
  $("#amplificar").popover({ content: "Amplificar", trigger: "hover", });
}
