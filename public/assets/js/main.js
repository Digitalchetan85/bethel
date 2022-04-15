(function ($) {
    "use strict";
    $("#HomeSlider").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    $(document).ready(function () {
        $(".animsition").animsition({
            inClass: "fade-in",
            outClass: "fade-out",
            inDuration: 800,
            outDuration: 500,
            linkElement: ".animsition-link",
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: "body", //animsition wrapper element
            loadingClass: "animsition-loading",
            loadingInner: "", // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 2000,
            onLoadEvent: true,
            browser: ["animation-duration", "-webkit-animation-duration"],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay: false,
            overlayClass: "animsition-overlay-slide",
            overlayParentElement: "body",
            transition: function (url) {
                window.location.href = url;
            },
        });
    });

    var windowH = $(window).height() / 2;
    $("#myBtn").css("display", "none");

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css("display", "block");
        } else {
            $("#myBtn").css("display", "none");
        }
    });

    $("#myBtn").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 300);
    });

    //hover dropdown
    $(document).ready(function(){
        $('li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });  
    });
    
})(jQuery);
