// Sticky Navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 90) {
    $(".nav-bar").addClass("sticky-top shadow");
  } else {
    $(".nav-bar").removeClass("sticky-top shadow");
  }
});
