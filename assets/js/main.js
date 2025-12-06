
$(document).ready(function () {
  const cf7ErrorIcon = $("#cf7ErrorIcon").data("icon-path");
  const cf7SuccessIcon = $("#cf7SuccessIcon").data("icon-path");
  const accordionExpandIcon = $("#accordionExpanded").data("icon-path");
  const accordionPlusIcon = $("#accordionPlus").data("icon-path");
  //   Loader Removal
  // setTimeout(() => {
  $(".loader-container").fadeOut("slow", function () {
    $(this).remove();
  });
  // Slick Slider Starts
  $(".testimonial-slider").slick({
    infinite: true,
    speed: 5000,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: "linear",
    pauseOnFocus: false,
    pauseOnHover: false,
    arrows: false,
    gap: 20,
    variableWidth: true,
    lazyLoad: 'ondemand',
  });
  // Slick Slider Ends

  // Mobile Navigation
  $(".icon_menu").click(function () {
    $(".mobile-menu").addClass("translate-x-0");
  });
  $(".mobile_icon_close").click(function () {
    $(".mobile-menu").removeClass("translate-x-0");
  });

  $(".mobile_droptoggler").click(function () {
    $(".mobile_dropdown").not($(this).next(".mobile_dropdown")).slideUp();
    $(this).next(".mobile_dropdown").slideToggle();
  });

  $(".accordion__item").click(function () {
    var currentP = $(this).find("p");
    currentP.slideToggle();
    // Toggle the image source for the clicked accordion item
    var currentImg = $(this).find("img");
    currentImg.attr("src", function (i, src) {
      return src === `${accordionPlusIcon}`
      ? `${accordionExpandIcon}`
      : `${accordionPlusIcon}`;
    });

    // Slide up all other p elements and reset their image sources
    $(this).siblings().find("p").slideUp();
    $(this).siblings().find("img").attr("src", `${accordionPlusIcon}`);
  });

  $(".search_icon_toggler").click(function () {
    $(".search-form-container").removeClass("invisible opacity-0");
    $(".searchform").removeClass("invisible translate-y-4 opacity-0");
    $(".demo-form").addClass("translate-y-8 opacity-0");
     $(".searchform input").val("");
    $(".searchform input").focus();
  });

  $(".close-search").click(function (event) {
    $(".search-form-container").addClass("invisible opacity-0");
    $(".searchform").addClass("invisible translate-y-4 opacity-0");
    $(".demo-form").addClass("translate-y-8 opacity-0");
  });

  $(".close-icon-form").click(function (event) {
    $(".demo-form-container").addClass("invisible");
    $(".practice-form-container").addClass("invisible");
    $(".demo-form").addClass("translate-y-8 opacity-0");
  });

  $(".demo-form-toggler").click(function (event) {
    $(".demo-form-container").removeClass("invisible");
    $(".demo-form").removeClass("translate-y-8 opacity-0");
  });

  $(".pr-form-toggler").click(function (event) {
    $(".practice-form-container").removeClass("invisible");
    $(".demo-form").removeClass("translate-y-8 opacity-0");
  });

  $(".demo-form-container, .search-form-container, .practice-form-container").click(function (
    event
  ) {
    if (event.target === this) {
      $(this).addClass("invisible");
      $(".searchform").addClass("invisible translate-y-4 opacity-0");
      $(".demo-form").addClass("translate-y-8 opacity-0");
    }
  });

  AOS.init({
    duration: 800,
    offset: 60,
    startEvent: "DOMContentLoaded",
    once: true,
    disable: 'phone',
  });
  function waitForContactForm7Submission() {
    const selectors = [
      $("#billing-form input"),
      $("#billing-form textarea"),
    ];
    return new Promise((resolve, reject) => {
      $(document).on("wpcf7mailsent", function (event) {
        $(".cf7Modal__icon").attr("src",cf7SuccessIcon)
        $(".cf7Modal__title").text("Thank you!");
        $(".cf7Modal__body").text("Your data has been submitted successfully. One of our representatives will reach out to you soon.");
        $("#cf7Modal").modal("show");
        $("#demoModal").modal("hide");
        $("#requestModal").modal("hide");
        selectors.forEach((selector) => {
          selector.val("");
        });
        $(".wpcf7-form .wpcf7-submit").val("submit");
        resolve(event);
      });
  
      $(document).on("wpcf7mailfailed", function (event) {
        $(".cf7Modal__icon").attr("src",cf7ErrorIcon)
        $(".cf7Modal__title").text("Submission Failed!");
        $(".cf7Modal__body").text("There was an error trying to send your message. Please try again later.");
        $("#cf7Modal").modal("show");
        $("#demoModal").modal("hide");
        $("#requestModal").modal("hide");
        selectors.forEach((selector) => {
          selector.val("");
        });
        $(".wpcf7-form .wpcf7-submit").val("submit");
        reject(event);
      });
    });
  }
  
  async function cf7AsyncHandler() {
    try {
      await waitForContactForm7Submission();
    } catch (error) {}
  }
  
  cf7AsyncHandler();
  $(".wpcf7-form .wpcf7-submit").on('click',function(){
    $(this).val('submitting...')
    setTimeout(() => {
      $(this).val('submit')
    }, 1000);
  })
  
  // Define the Tawk.to widget key
var widgetKey = "637e14f1b0d6371309d0adb0";


// Function to open the Tawk.to chat
function openTawkToChat() {
    // Check if the Tawk.to script is already loaded
    if (typeof Tawk_API !== "undefined") {
        Tawk_API.maximize();
    } else {
        // Tawk.to script not loaded, load it dynamically
        var s1 = document.createElement("script");
        s1.async = true;
        s1.src = "https://embed.tawk.to/" + widgetKey + "/default";
        s1.onload = function () {
            Tawk_API.maximize();
        };
        document.head.appendChild(s1);
    }
}

// Assuming you have a button or element with the class "tawlk-toggle"
$(".tawlk-toggle").click(function () {
    openTawkToChat();
});

  // First Visit Popup
  function setCookie(name, value, hours) {
    var expires = "";
    if (hours) {
      var date = new Date();
      date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  // Show popup if not shown in the last 24 hours
  if (!getCookie("popupShown")) {
    setTimeout(function() {
      $("#firstVisitPopup").removeClass("hidden");
    }, 2000); // Show after 2 seconds
  }

  // Close popup and set cookie for 24 hours
  $("#closePopupBtn, #bookDemoBtn, #freeAnalysisBtn").click(function() {
    $("#firstVisitPopup").addClass("hidden");
    setCookie("popupShown", "true", 24); // Cookie expires in 24 hours
  });

  // Redirect buttons to appropriate forms
  $("#bookDemoBtn").click(function() {
    window.location.href = "/calendly/";
  });

  $("#freeAnalysisBtn").click(function() {
    $("#requestModal").modal("show");
  });
  
});
