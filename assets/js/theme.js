(function($) {
    jQuery(document).ready(function() {
        var portfolio = new Swiper(".portfolio-swiper", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "bullets",
            },
            paginationClickable: true,
            centeredSlides: true,
            spaceBetween: 5,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },

            on: {
                slideChange: function() {
                    if ($("#portfolio .swiper-slide img").hasClass("d-none")) {
                        $("#portfolio .swiper-slide img").removeClass("d-block");
                        $("#portfolio .swiper-slide")
                            .find("img")
                            .eq(portfolio.activeIndex)
                            .addClass("d-block animated fadeIn");
                        $("#portfolio .swiper-slide")
                            .find("h3")
                            .eq(portfolio.activeIndex)
                            .addClass(" animated fadeIn ");
                    } else {
                        $("#portfolio .swiper-slide")
                            .find("img")
                            .eq(portfolio.activeIndex)
                            .addClass("d-block animated fadeIn");
                        $("#portfolio .swiper-slide")
                            .find("h3")
                            .eq(portfolio.activeIndex)
                            .addClass(" animated fadeIn ");
                    }
                },
            },
        });
    });



    var experiences = new Swiper(".ex-swiper", {
        direction: "vertical",
        slidesPerView: 1,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".ex-pagination",
            clickable: true,
        },
    });

    var swiper = new Swiper(".testimonials-thumbs", {
        loop: false,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        slidesPerView: 6,
        slideToClickedSlide: true,
        allowTouchMove: false


    });
    var swiper2 = new Swiper(".testimonials-swiper", {
        spaceBetween: 10,
        slidesPerView: 1,


        thumbs: {
            swiper: swiper,
        },
    });


    var swiper = new Swiper(".PortfolioGallery", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $('section').mousemove(function(e) {
        var xPos = e.pageX / 45;
        var yPos = e.pageY / 45;
        $('.shape1 , .shape2').css('-webkit-transform',
            'translate(' + xPos + 'px , ' + yPos + 'px)'
        );
    });


    /*lg menu */
    $(".lg-main-menu a").click(function(e) {
        if ($("#sidebar-wrapper-lg").hasClass('active')) {
            $("#sidebar-wrapper-lg").removeClass("active");
            $("#menu-toggle-lg").removeClass("open");


        }
    });


    $(".lg-menu").click(function(e) {
        e.stopPropagation();
        $("#sidebar-wrapper-lg").toggleClass("active");
        $("#menu-toggle-lg").toggleClass('open');

    });


    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            if (this.hash !== "") {
                event.preventDefault();

                var hash = this.hash;


                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                    window.location.hash = hash;
                });
            } // End if
        });
    });


})(jQuery);