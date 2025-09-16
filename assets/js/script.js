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
    }, 100);
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

  // Single Product
  if (page == "single_product") {
    $(".sub-product").on("click", function () {
      let newSrc = $(this).attr("src");
      $("#main-img").attr("src", newSrc);
      $(".sub-product").removeClass("border-danger");
      $(this).addClass("border-danger");
    });
  }



  // Load HTML
  async function loadHTML(id, file) {
    const response = await fetch(file);
    const html = await response.text();
    $(id).html(html);
    if (id === "#navbar") {
      highlightActiveLink();
    }
  }
  loadHTML("#navbar", "components/navbar.html");
  loadHTML("#footer", "components/footer.html");

  function highlightActiveLink() {
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll("#navbar .nav-link");

    navLinks.forEach(link => {
      const href = link.getAttribute("href");
      if (!href) return; // skip if no href

      const linkPage = href.split("/").pop();

      if (
        linkPage === currentPage ||
        (currentPage === "" && linkPage === "index.html")
      ) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });

  }
})(jQuery);