$(document).ready(function() {
    $('.toogle-search').hover(function(e) {
        // e.preventDefault();
        $('.toogle-search').css('visibility', 'hidden');
        $(this).next().addClass('show');
    }, function() {

    });
    $("body").click(function(e) {
        // e.stopPropagation();
        $('.search-sticky').removeClass('show');
        $('.toogle-search').css('visibility', 'visible');
    });
    $(".search-sticky").click(function(e) {
        e.stopPropagation();
    });
    $('.btn-showpass').click(function(e) {
        $(this).toggleClass('show');
        if ($('.form-group').hasClass('show')) {
            $('.input-pass').attr('type', 'text');
        }
    });

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is <= 640px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        },
    });
    var swiper = new Swiper('.swiper-partner', {
        slidesPerView: 6,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            // when window width is <= 640px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        },
        // autoplay: {
        //     delay: $('.swiper-product').data('time'),
        // },
    });
    $('.owl-banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        // nav: true,
        autoplayTimeout: $('.owl-banner').data('time'),
        smartSpeed: 1000,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('.owl-sponsor').owlCarousel({
        loop: true,
        margin: 10,
        // nav: true,
        autoplay: true,
        nav: false,
        autoplayTimeout: $('.owl-banner').data('time'),
        smartSpeed: 1000,
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 4
            }
        }
    })
    $('.owl-saleoff-product').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        autoplay: true,
        nav: true,
        navText: ["<img src='Assets/Frontend/images/left-chevron.png'>", "<img src='Assets/Frontend/images/right-chevron.png'>"],
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2
            },
            769: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    $('.owl-partner').owlCarousel({
            loop: false,
            margin: 100,
            nav: true,
            autoplay: true,
            nav: false,
            navText: ["<img src='Assets/Frontend/images/arow-left.png'>", "<img src='Assets/Frontend/images/arow-right.png'>"],
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        // show/hide password 
    $(".toggle-password").click(function() {

        $(this).toggleClass("btn-showpass");
        var input = $($(this).attr("toggle"));
        console.log("huhu");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    // 
    $('.btn-like').click(function() {
        $(this).toggleClass('active');
    })

    /** Menu mobile **/
    $(".accodition").click(function() {
        $(this).next().slideToggle('fast');
        $(this).toggleClass('rotate');
    });
    $(".open-sidemenu").click(function() {
        $('#sidenav').toggleClass('menu-mobile');
        $('.block-overlay').toggleClass('over');
        $('body').toggleClass('no-scroll');
        $('.block-header-sale').addClass('slow-layer');
    });
    $(".block-overlay").click(function() {
        $('#sidenav').toggleClass('menu-mobile');
        $(this).toggleClass('over');
        $('body').toggleClass('no-scroll');
        $('.block-header-sale').removeClass('slow-layer');
    });
    /** Menu mobile **/

    $(function() {
        var star = '.star',
            selected = '.selected';

        $(star).on('click', function() {
            $(selected).each(function() {
                $(this).removeClass('selected');
            });
            $(this).addClass('selected');
        });

    });
});
// menu
(function($) {
    'use strict';

    var defaults = {
        topOffset: 400, //px - offset to switch of fixed position
        hideDuration: 300, //ms
        stickyClass: 'is-fixed'
    };

    $.fn.stickyPanel = function(options) {
        if (this.length == 0) return this; // returns the current jQuery object

        var self = this,
            settings,
            isFixed = false, //state of panel
            stickyClass,
            animation = {
                normal: self.css('animationDuration'), //show duration
                reverse: '', //hide duration
                getStyle: function(type) {
                    return {
                        animationDirection: type,
                        animationDuration: this[type]
                    };
                }
            };

        // Init carousel
        function init() {
            settings = $.extend({}, defaults, options);
            animation.reverse = settings.hideDuration + 'ms';
            stickyClass = settings.stickyClass;
            $(window).on('scroll', onScroll).trigger('scroll');
        }

        // On scroll
        function onScroll() {
            if (window.pageYOffset > settings.topOffset) {
                if (!isFixed) {
                    isFixed = true;
                    self.addClass(stickyClass)
                        .css(animation.getStyle('normal'));
                }
            } else {
                if (isFixed) {
                    isFixed = false;

                    self.removeClass(stickyClass)
                        .each(function(index, e) {
                            // restart animation
                            // https://css-tricks.com/restart-css-animation/
                            void e.offsetWidth;
                        })
                        .addClass(stickyClass)
                        .css(animation.getStyle('reverse'));

                    setTimeout(function() {
                        self.removeClass(stickyClass);
                    }, settings.hideDuration);
                }
            }
        }

        init();

        return this;
    }
})(jQuery);

//run
$(function() {
    $('#block-header-menu').stickyPanel();
});
// truncate text loong
// $(function () {
//     var newDes=document.getElementById('new-des');
//     var newTitle=document.getElementById('new-title');
//     var newTitle2=document.getElementById('new-title-ft');
//     newTitle.innerHTML=newTitle.innerHTML.substring(0,100)+'...';
//     newTitle2.innerHTML=newTitle2.innerHTML.substring(0,100)+'...';
//     newDes.innerHTML=newDes.innerHTML.substring(0,200)+'...';

// });
// end truncate 
// modal
$(document).ready(function() {
    // popup //
    $('.button-popup').click(function() {
        console.log('hsdgfahsgfhjsgfhsg')
        var $parent = $(this).closest('.bdt-item');
        var itemId = $(this).attr('data-id');
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
    });

    $('.close-btn').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    });
    $('.modal-background').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    });
    $(".modal-background .modal").click(function(e) {
        e.stopPropagation();
    });
    if ($(window).width() > 767) {
        if ($(".modal-background .modal").height() > $(window).height()) {
            $('#modal-container').css('display', 'block');
            $('#modal-container').css('overflow-y', 'scroll');
            $('#modal-container .modal-background').css('display', 'block');
        } else {
            $('#modal-container').css('display', 'table');
            $('#modal-container').css('overflow-y', 'auto');
            $('#modal-container .modal-background').css('display', 'table-cell');
        }
    } else {

    }
    if ($(window).width() <= 768) {
        $('#sidenav').removeClass('main-menu');
    } else {
        $('#sidenav').addClass('main-menu');
    }
});
// sidemenu
$(window).resize(function() {
    if ($(window).width() <= 768) {
        $('#sidenav').removeClass('main-menu');
    } else {
        $('#sidenav').addClass('main-menu');
    }
});
// slide price
$(function() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 7000000,
        values: [50000, 5000000],
        slide: function(event, ui) {
            $("#amount").val(ui.values[0] + "đ" + " - " + ui.values[1] + "đ");
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) + "đ" +
        " - " + $("#slider-range").slider("values", 1) + "đ");
});
// double owl
document.addEventListener("DOMContentLoaded", function() {
    console.log("start");
    let galleries = document.querySelectorAll(".gallery");

    Array.prototype.forEach.call(galleries, function(el, i) {
        const $this = $(el);
        const $owl1 = $this.find(".owl-1");
        const $owl2 = $this.find(".owl-2");
        let flag = false;
        let duration = 300;

        $owl1
            .owlCarousel({
                items: 1,
                lazyLoad: false,
                loop: false,
                dots: false,
                margin: 10,
                nav: false,
                responsiveClass: true
            })
            .on("changed.owl.carousel", function(e) {
                if (!flag) {
                    flag = true;
                    $owl2
                        .find(".owl-item")
                        .removeClass("current")
                        .eq(e.item.index)
                        .addClass("current");
                    if (
                        $owl2
                        .find(".owl-item")
                        .eq(e.item.index)
                        .hasClass("active")
                    ) {} else {
                        $owl2.trigger("to.owl.carousel", [e.item.index, duration, true]);
                    }
                    flag = false;
                }
            });

        $owl2
            .on("initialized.owl.carousel", function() {
                $owl2
                    .find(".owl-item")
                    .eq(0)
                    .addClass("current");
            })
            .owlCarousel({
                items: 6,
                lazyLoad: false,
                loop: false,
                margin: 20,
                nav: false,
                dots: false,
                responsiveClass: true
            })
            .on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                $owl1.trigger("to.owl.carousel", [number, duration, true]);
            });
    });
});

// change quanlity
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"><img src="Assets/Frontend/images/plus.png" alt=""></div><div class="quantity-button quantity-down"><img src="Assets/Frontend/images/minus.png" alt=""></div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

});

//Select tag
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-selectag");
for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
$(document).ready(function() {
    $('.custom-selectag-2 .select-selected').empty();
    $('.select-selected').click(function(e) {
        e.preventDefault();

        if ($('.select-selected').is(':empty')) {
            $(this).prev().addClass('tranf');
        } else {

        }
    });

});
$(function() {
    $('.thumb-h').matchHeight();
});
// Js menu sticky
$(document).ready(function() {

    // Even when the window is resized, run this code.
    $(window).resize(function() {

        // Variables
        var windowHeight = $(window).height();

        // Find the value of 90% of the viewport height
        var ninetypercent = .1 * windowHeight;

        // When the document is scrolled ninety percent, toggle the classes
        // Does not work in iOS 7 or below
        // Hasn't been tested in iOS 8
        $(document).scroll(function() {

            // Store the document scroll function in a variable
            var y = $(this).scrollTop();

            // If the document is scrolled 90%
            if (y > ninetypercent) {

                // Add the "sticky" class
                $('header').addClass('sticky-menu');
            } else {
                // Else remove it.
                $('header').removeClass('sticky-menu');
            }
        });

        // Trường hợp khi cuộn load lại page
        var yy = $(this).scrollTop();
        // If the document reload
        if (yy > ninetypercent) {

            // Add the "sticky" class
            $('header').addClass('sticky-menu');
        } else {
            // Else remove it.
            $('header').removeClass('sticky-menu');
        }
        // Call it on resize.
    }).resize();


}); // jQuery