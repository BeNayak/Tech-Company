
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


