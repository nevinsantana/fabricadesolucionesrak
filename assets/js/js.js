$(document).ready(function() {
    $("#bs-example-navbar-collapse-1 li a[href='#']").click(function(e) {
      e.preventDefault();
    });
    $("a[href='#'].navbar-brand").click(function(e){ e.preventDefault() });
});