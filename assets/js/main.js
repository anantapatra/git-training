$(window).on("load", function () {
  "use strict";

  /* ===================================
        Loading Timeout
     ====================================== */
  $(".side-menu").removeClass("hidden");

  setTimeout(function () {
    $(".preloader").fadeOut();
  }, 1000);
});

//*********************SMOOTH SCROLL*****************************//

$("a.pagescroll").on("click", function (event) {
  event.preventDefault();
  $("html,body").animate(
    {
      scrollTop: $(this.hash).offset().top,
    },
    1200
  );
});

/* ===================================
    other
 ====================================== */
 $(".navbar-toggler").click(function () {
  $("body").toggleClass("overflow-hidden");
});
$(".email-floating").click(function () {
  $(".email-modal").addClass("show");
});
$(".email-modal .close-icon").click(function () {
  $(".email-modal").removeClass("show");
});


/* ===================================
     WOW Animation
 ====================================== */
if ($(window).width() > 991) {
  var wow = new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: false,
    live: true,
  });
  new WOW().init();
}

/* ===================================
       Header appear
   ====================================== */
jQuery(function ($) {
  "use strict";

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 50) {
      // Set position from top to add class
      $("header").addClass("header-appear");
    } else {
      $("header").removeClass("header-appear");
    }
  });
});

/* ===================================
        Nav Scroll
====================================== */
$(".scroll").on("click", function (event) {
  event.preventDefault();
  $("html,body").animate({
    scrollTop: $(this.hash).offset().top - 88,
  });
});

/* countdown */
function makeTimer() {
  //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
  var endTime = new Date("01 September 2023 0:0:00 GMT+01:00");
  endTime = Date.parse(endTime) / 1000;

  var now = new Date();
  now = Date.parse(now) / 1000;

  var timeLeft = endTime - now;

  var days = Math.floor(timeLeft / 86400);
  var hours = Math.floor((timeLeft - days * 86400) / 3600);
  var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
  var seconds = Math.floor(
    timeLeft - days * 86400 - hours * 3600 - minutes * 60
  );

  if (hours < "10") {
    hours = "0" + hours;
  }
  if (minutes < "10") {
    minutes = "0" + minutes;
  }
  if (seconds < "10") {
    seconds = "0" + seconds;
  }

  $("#days").html(days + "<span>Days</span>");
  $("#hours").html(hours + "<span>Hours</span>");
  $("#minutes").html(minutes + "<span>Minutes</span>");
  $("#seconds").html(seconds + "<span>Seconds</span>");
}

setInterval(function () {
  makeTimer();
}, 1000);


$(".carousel-testimonial").owlCarousel({
  loop: true,
  items: 3,
  margin: 30,
  stagePadding: 0,
  nav: true,
  navText: [
    '<span class="ion-ios-arrow-back">',
    '<span class="ion-ios-arrow-forward">',
  ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    800: {
      items: 2,
    },
    1200: {
      items: 3,
    },
  },
});

$(".clients-carousel").owlCarousel({
  autoplay: true,
  loop: true,
  margin: 15,
  dots: false,
  slideTransition: "linear",
  autoplayTimeout: 4500,
  autoplayHoverPause: true,
  autoplaySpeed: 4500,
  responsive: {
    0: {
      items: 2,
    },
    500: {
      items: 3,
    },
    600: {
      items: 3,
    },
    800: {
      items: 5,
    },
    1200: {
      items: 6,
    },
  },
});

$(".carousel-banner").owlCarousel({
  loop: true,
  items: 1,
  nav: false,
});
