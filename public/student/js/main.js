// Prevent close dropdown menu
$(document).on('click', '.search-wrapper .dropdown-menu', function (e) {
    e.stopPropagation();
});
// Trip cases
$('.trip-way input[type=radio]').change(function () {
    if (this.value == 'oneWay') {
        $(".one-way").addClass("show");
        $(".round-trip").removeClass("show");
        $(".multi-city").removeClass("show");
    } else if (this.value == 'roundTrip') {
        $(".one-way").removeClass("show");
        $(".round-trip").addClass("show");
        $(".multi-city").removeClass("show");
    } else if (this.value == 'multiCity') {
        $(".one-way").addClass("show");
        $(".round-trip").removeClass("show");
        $(".multi-city").addClass("show");
    }
});
//
$(".filter-results li a").click(function (e) {
    e.preventDefault();
    // remove classes from all
    $("li").removeClass("active");
    // add class to the one we clicked
    $(this).parent().addClass("active");
});
// Price Range slider
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 9999,
        values: [0, 9999],
        slide: function (event, ui) {
            $("#amount1").val("$" + ui.values[0]);
            $("#amount2").val("$" + ui.values[1]);
        }
    });
    $("#amount1").val("$" + $("#slider-range").slider("values", 0));
    $("#amount2").val("$" + $("#slider-range").slider("values", 1));
});
// Trip Slider
$(document).ready(function () {
    $(".owl-carousel.trip-slider").owlCarousel({
        loop: true,
        margin: 20,
        autoWidth: true,
        items: 4,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
    });
});
// Hotel Slider
$(document).ready(function () {
    $(".owl-carousel.special-offer-slider").owlCarousel({
        loop: true,
        margin: 20,

        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                autoWidth: true,
                items: 1,
            },
        }
    });
    $(".owl-carousel.payment-slider").owlCarousel({
        loop: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        margin: 20,
        autoWidth: true,
        items: 4,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
    });
});
// Hotel
$(document).ready(function () {
    $('.owl-carousel.hotel-slider').owlCarousel({
        items: 1,
        loop: false,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        center: true,
        margin: 0,
        callbacks: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash'
    });
});
// WOW =====================
$(document).ready(function () {
    wow = new WOW
    (
        {
            boxClass: 'wow',            // default
            animateClass: 'animated',   // default
            offset: 1,                  // default
            mobile: false,               // default
            live: true                  // default
        }
    );
    wow.init()
});

//================================ map
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(30.0444196, 31.2357116),
        zoom: 12,
    };
    var map = new google.maps.Map(document.getElementById("map"), mapProp);
    var image = 'assets/images/map.png';
    var beachMarker = new google.maps.Marker({
        position: {lat: 30.0444196, lng: 31.2357116},
        map: map,
        icon: image
    });
}

//  DatePiker
$(function () {
    $('input[name="multiDatePicker"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('input[name="multiDatePicker"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    });
    $('input[name="multiDatePicker"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
});

//singleDatePicker
$(function () {
    $('input[name="singleDatePicker"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        singleDatePicker: true,
        locale: {
            cancelLabel: 'Clear'
        }
    });
    $('input[name="singleDatePicker"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY'));
    });
    $('input[name="singleDatePicker"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });
});


// Side menu
$(document).ready(function () {
    $(".side-menu-toggle-s").click(function () {
        $(".main-wrapper").toggleClass("toggle")
    })
});
$(window).resize(function () {
    if ($(window).width() < 1400) {
        $(".main-wrapper").addClass("toggle")
    }
        // else if ($(window).width() < 992){
        //     $(".main-wrapper").addClass("toggle")
    // }
    else {
        $(".main-wrapper").removeClass("toggle")

    }
});
$(document).ready(function () {
    if ($(window).width() < 1400) {
        $(".main-wrapper").addClass("toggle")
    }
        // else if ($(window).width() < 992){
        //     $(".main-wrapper").addClass("toggle")
    // }
    else {
        $(".main-wrapper").removeClass("toggle")

    }
});

// Header scroll
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 20) {
            $("header, .header, .tab-content#myTabContent").addClass("scrolled");
        } else {
            $("header, .header, .tab-content#myTabContent").removeClass("scrolled");
        }
    });
    $(this).scrollTop(0);

});
