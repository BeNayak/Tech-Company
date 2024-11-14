
//for counter

$(document).ready(function () {
    var hasAnimated = false;

    $(window).scroll(function () {
        var counterBoxOffset = $(".number-card").offset().top;
        var windowBottom = $(window).scrollTop() + $(window).height();

        if (!hasAnimated && windowBottom > counterBoxOffset) {
            $(".counter").each(function () {
                var $this = $(this),
                    targetNumber = $this.data("number");

                $({ countNum: $this.text() }).animate(
                    {
                        countNum: targetNumber,
                    },
                    {
                        duration: 850,
                        easing: "swing",
                        step: function () {
                            $this.text(Math.ceil(this.countNum).toLocaleString("en"));
                        },
                        complete: function () {
                            $this.text(Math.ceil(this.countNum).toLocaleString("en"));
                        },
                    }
                );
            });
            hasAnimated = true;
        }
    });

    $(window).trigger('scroll');
    });



// for sticky navbar when scroll

window.onscroll = function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
};

document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('sticky');
    }
});


$('.testimonial-cards-slider').slick({
    infinite:true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: false,
    autoplaySpeed: 3000,
    arrows:false,
    responsive: [
       
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
});

$('.client-group').slick({
    infinite:true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows:false
});