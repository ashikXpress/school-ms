
/*------------------------------------------------------------------
* Project:        Padhai
* Author:         CN-InfoTech
* URL:            hthttps://themeforest.net/user/cn-infotech
* Created:        08/30/2019
-------------------------------------------------------------------
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

    //CACHE JQUERY OBJECTS
    var $window = $(window);

    $window.on( 'load', function () {
        $("#status").fadeOut();
        $("#preloader").delay(350).fadeOut("slow");
        $("body").delay(350).css({ "overflow": "visible" });

        
        /* Init Wow Js */
        new WOW().init();

        /*========= Masonry Grid Script ==========*/

        $(".grid-masonry").masonry({
            // options...
            itemSelector: ".grid-item",
            columnWidth: ".grid-item",

        });

        /*========== End Masonry Grid ==========*/

        /* Preloader */
        
        $("#status").fadeOut();
        $("#preloader").delay(350).fadeOut("slow");

        /* END of Preloader */

    });


    /*======= jQuery navbar on scroll =========*/


    $window.on('scroll' , function () {

        if ($(".navbar-default").add(".navbar-inverse").offset().top > 50) {
            $(".reveal-menu-home").addClass("sticky-nav");
            $(".reveal-menu-blog").addClass("sticky-nav-white");
        } else {
            $(".reveal-menu-home").removeClass("sticky-nav");
            $(".reveal-menu-blog").removeClass("sticky-nav-white");
        }
    });

    /*======= Banner Resize with window size =========*/

    $window.on( 'resize', function () {
        var bodyheight = $(this).height();
        $("#mt_banner").height(bodyheight);
    }).resize();

    /*========= Fun and Facts Script ======== */

    try {
        $(".fun-facts_wrapper").appear(function () {
            $(".timer").countTo();
        });
    } catch (err) {

        console.log(err.message);
    }

    // back to top

    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});

    /*======== One Page Scrolling ======= */

    $("#navigation").onePageNav({
        currentClass: "active",
        changeHash: true,
        scrollSpeed: 1000,
        scrollThreshold: 0.5,
        filter: "",
        easing: "swing",
        begin: function () {
            //I get fired when the animation is starting
        },
        end: function () {
            //I get fired when the animation is ending
        },
        scrollChange: function ($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

    /*======== Isotope Filter Script =========*/

    var mt_personal = window.mt_personal || {},
        $win = $(window);

        mt_personal.Isotope = function () {

        // 4 column layout
        var isotopeContainer = $(".isotopeContainer");
        if (!isotopeContainer.length || !jQuery().isotope) return;
        $win.on('load' , function(){
            isotopeContainer.isotope({
                itemSelector: ".isotopeSelector"
            });
            $(".mt_filter").on("click", "a", function (e) {
                $(".mt_filter ul li").find(".active").removeClass("active");
                $(this).addClass("active");
                var filterValue = $(this).attr("data-filter");
                isotopeContainer.isotope({ filter: filterValue });
                e.preventDefault();
            });
        });

    };

    mt_personal.Isotope();


    /*======== Fancy Box Init ========*/
    
    $(".various").fancybox({
        maxWidth: 800,
        maxHeight: 600,
        fitToView: false,
        width: "70%",
        height: "70%",
        autoSize: false,
        closeClick: true,
        openEffect: "elastic",
        closeEffect: "none"
    });

    
 
    // Range sliders activation
    $(".range-slider-ui").each(function () {
        var minRangeValue = $(this).attr('data-min');
        var maxRangeValue = $(this).attr('data-max');
        var minName = $(this).attr('data-min-name');
        var maxName = $(this).attr('data-max-name');
        var unit = $(this).attr('data-unit');

        $(this).slider({
            range: true,
            min: minRangeValue,
            max: maxRangeValue,
            values: [minRangeValue, maxRangeValue],
            slide: function (event, ui) {
                event = event;
                var currentMin = parseInt(ui.values[0], 10);
                var currentMax = parseInt(ui.values[1], 10);
                $(this).children(".min-value").text( currentMin + " " + unit);
                $(this).children(".max-value").text(currentMax + " " + unit);
                $(this).children(".current-min").val(currentMin);
                $(this).children(".current-max").val(currentMax);
            }
        });
    });

    
    
    /*======== Fancy Box Gallery Init ========*/

    var FancYB = $('.fancybox');
    FancYB.fancybox({
        openEffect: 'fade',
        closeEffect: 'fade',
        padding : 0,
        closeBtn: true,
        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
              locked: false
            },
            buttons: {}
        }
    });
    FancYB.attr('rel','gallery');
    
    /*======== Contact Form ========*/

    $('#submit-btn').on('click',function (event){
        event.preventDefault();
        $.ajax({
            dataType: 'JSON',
            url: 'sendmail.php',
            type: 'POST',
            data: $('#contact_form').serialize(),
            beforeSend: function (xhr) {
                $('.mt_load').show();
            },
            success: function (response) {
                if (response) {
                    console.log(response);
                    if (response['signal'] == 'ok') {
                        toastr.success(response['msg']);
                        $('#msg').hide();
                        $('input, textarea').val(function () {
                            return this.defaultValue;
                        });
                    }
                    else {
                        $('#msg').show();
                        $('#msg').html('<div class="mt_error">'+ response['msg'] +'</div>');
                    }
                }
            },
            error: function () {
                $('#msg').show();
                $('#msg').html('<div class="mt_error">Errors occur. Please try again later.</div>');
            },
            complete: function () {
                $('.mt_load').hide();
            }
        });
    });
    /*======== End Contact Form ========*/

    // Search in header.
        if( $('.search-icon').length > 0 ) {
            $('.search-icon').on('click', function(e){
              e.preventDefault();
              $('.search-box-wrap').slideToggle();
            });
        }



/*======== Slick Slider =========*/

$('.slider-items').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

/*======== Slick Slider =========*/

$('.slider-insta').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 10,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

$('.slider-insta1').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 7,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
});  

/*======== Slick Slider =========*/

$('.slider-partner').slick({
  infinite: true,
  loop: true,
  autoplay: true,
  arrows: false,
  dots: false,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
      {
      breakpoint: 639,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
});  

/*======== Slick Slider =========*/

$('.edu_team_slider').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false
      }
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      }
    }
  ]
}); 


$('.chef_team').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1
}); 

/*======== Slick Slider =========*/

$('.edu_team_slider3').slick({
  infinite: true,
  autoplay: false,
  arrows: false,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
      }
    }
  ]
}); 

/*======== Slick Slider =========*/

$('.slider-ft-course').slick({
  infinite: true,
  autoplay: false,
  arrows: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
      }
    },
    {
      breakpoint: 639,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
      }
    }
  ]
});


$('.slider-ft-drive').slick({
  infinite: true,
  autoplay: false,
  arrows: false,
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
      }
    }
  ]
});


/*======== Slick Slider =========*/

$('.slider-eductestimo').slick({
  infinite: true,
  autoplay: false,
  arrows: false,
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1
});

$('.slider-eductestimo1').slick({
  infinite: true,
  autoplay: false,
  arrows: false,
  dots: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
      {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        arrows:false,
      }
    },
    {
      breakpoint: 570,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
});


/*======== Slick Slider =========*/

$('.slider-eductestimo3').slick({
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  arrows: false,
  dots: true,
  autoplay: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.autoplay_list').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.event_ii').slick({
  slidesToShow: 2,
  slidesToScroll: 2,
  arrows: false,
  dots: true,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

//Progress bar
    jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
            width:jQuery(this).attr('data-percent')
        },6000);
    });


});

$(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });

/*======== Init Google Map =========*/

function initMap() {

    // Specify features and elements to define styles.
    var styleArray = [
      {
          featureType: "all",
          stylers: [
           { saturation: -80 }
          ]
      }, {
          featureType: "road.arterial",
          elementType: "geometry",
          stylers: [
            { hue: "#00ffee" },
            { saturation: 50 }
          ]
      }, {
          featureType: "poi.business",
          elementType: "labels",
          stylers: [
            { visibility: "off" }
          ]
      }
    ];

    // Create a map object and specify the DOM element for display.
    var latlng = new google.maps.LatLng(27.7172, 85.3240);// Change a map coordinate here!
    var map = new google.maps.Map(document.getElementById("map"), {
        center: latlng, 
        scrollwheel: false,
        // Apply the map style array to the map.
        styles: styleArray,
        zoom: 13
    });
}

// Apps Screenshot Slider
jQuery(document).on('ready', function() {
   
     screenshotSlider();
 
});

function screenshotSlider () {
  var cSlider = $ (".screenshoot-slider");
  if(cSlider.length) {
      cSlider.owlCarousel({
        loop:true,
        dots:true,
        autoplay:true,
        autoplayTimeout:4000,
        smartSpeed:1200,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            551:{
                items:2
            },
            768:{
                items:3
            },
            1200:{
                items:5
            }
        },
    })
  }
}

    // accordian

    if ($('.accrodion-grp').length) {
        var accrodionGrp = $('.accrodion-grp');
        accrodionGrp.each(function () {
            var accrodionName = $(this).data('grp-name');
            var Self = $(this);
            var accordion = Self.find('.accrodion');
            Self.addClass(accrodionName);
            Self.find('.accrodion .accrodion-content').hide();
            Self.find('.accrodion.active').find('.accrodion-content').show();
            accordion.each(function() {
                $(this).find('.accrodion-title').on('click', function () {
                    if ($(this).parent().hasClass('active') === false ) {                   
                        $('.accrodion-grp.'+accrodionName).find('.accrodion').removeClass('active');
                        $('.accrodion-grp.'+accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
                        $(this).parent().addClass('active');                    
                        $(this).parent().find('.accrodion-content').slideDown();        
                    };
                    

                });
            });
        });
        
    };