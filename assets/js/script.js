(function ($) {
  "use strict";

  const page = $("#pages").val();

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
        $("body").removeClass("overflow-hidden");
      }
    }, 1000);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();
  // Menu on scroll
  $(window).scroll(function () {
    if ($(window).width() < 992) {
      if ($(this).scrollTop() > 45) {
        $(".fixed-top").addClass("bg-blur shadow-sm");
      } else {
        $(".fixed-top").removeClass("bg-blur shadow-sm");
      }
    } else {
      if ($(this).scrollTop() > 45) {
        $(".fixed-top").addClass("bg-blur shadow-sm").css("top", -5);
      } else {
        $(".fixed-top").removeClass("bg-blur shadow-sm").css("top", 0);
      }
    }
  });
})(jQuery);