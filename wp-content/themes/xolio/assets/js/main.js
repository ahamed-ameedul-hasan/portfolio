(function ($) {
	"use strict";


$(window).on('load', function () {
    preloader();
    mainSlider();
    wowAnimation();
});


/*=============================================
    =    		 Preloader			      =
=============================================*/
    function preloader() {
    $('#preloader').delay(0).fadeOut();
};


/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.menu-item-has-children ul').length) {
	$('.menu-area .navigation li.menu-item-has-children').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(300);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.menu-backdrop, .mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}



/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");
		$('.scroll-to-target').removeClass('open');

	} else {
		$("#sticky-header").addClass("sticky-menu");
		$('.scroll-to-target').addClass('open');
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}


/*=============================================
	=    		Button Effect  	         =
=============================================*/
$('.btn').on('mouseenter', function (e) {
	var parentOffset = $(this).offset(),
		relX = e.pageX - parentOffset.left,
		relY = e.pageY - parentOffset.top;
	$(this).find('span').css({ top: relY, left: relX })
}).on('mouseout', function (e) {
	var parentOffset = $(this).offset(),
		relX = e.pageX - parentOffset.left,
		relY = e.pageY - parentOffset.top;
	$(this).find('span').css({ top: relY, left: relX })
});


/*=============================================
	=           Data Color             =
=============================================*/
$("[data-bg-color]").each(function () {
	$(this).css("background-color", $(this).attr("data-bg-color"));
});


/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: false,
		autoplaySpeed: 10000,
		dots: true,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 767, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}


/*=============================================
	=          Active Class               =
=============================================*/
$('.services-item-two').on('mouseenter', function () {
	$(this).addClass('active').parent().siblings().find('.services-item-two').removeClass('active');
})


/*=============================================
	=          header btn active               =
=============================================*/
$(function () {
	$(".header-btn").on('click', function () {
		$('.header-contact-wrap, .body-contact-overlay').toggleClass("active");
		$('body').toggleClass("fix");
		return false;
	});
	$(".body-contact-overlay").on('click', function () {
		$('.header-contact-wrap, .body-contact-overlay').removeClass("active");
		$('body').removeClass("fix");
		return false;
	});
});


/*=============================================
	=        Mouse Active          =
=============================================*/
$(".slider-drag").on("mouseenter", function () {
    $(".mouseCursor").addClass("cursor-big");
});
$(".slider-drag").on("mouseleave", function () {
    $(".mouseCursor").removeClass("cursor-big");
});

$("a,.sub-menu,button").on("mouseenter", function () {
    $(".mouseCursor").addClass("opacity-0");
});
$("a,.sub-menu,button").on("mouseleave", function () {
    $(".mouseCursor").removeClass("opacity-0");
});

// Mouse Custom Cursor
function itCursor() {
    var myCursor = jQuery(".mouseCursor");
    if (myCursor.length) {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
            let n,
            i = 0,
            o = !1;
            (window.onmousemove = function (s) {
            o ||
                (t.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                (e.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                (n = s.clientY),
                (i = s.clientX);
            }),
            $("body").on("mouseenter", "button, a, .cursor-pointer", function () {
                e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
            }),
            $("body").on("mouseleave", "button, a, .cursor-pointer", function () {
                ($(this).is("a", "button") &&
                $(this).closest(".cursor-pointer").length) ||
                (e.classList.remove("cursor-hover"),
                t.classList.remove("cursor-hover"));
            }),
            (e.style.visibility = "visible"),
            (t.style.visibility = "visible");
        }
    }
}
itCursor();


/*=============================================
	=        parallaxMouse Active          =
=============================================*/
function parallaxMouse() {
	if ($('.parallax').length) {
		var scene = document.querySelectorAll('.parallax');
		for (var i = 0; i < scene.length; i++) {
			var parallaxInstance = new Parallax(scene[i], {
				relativeInput: true,
				hoverOnly: true,
				selector: '.layer',
				pointerEvents: true,
			});
		}
	};
};
parallaxMouse();


/*=============================================
	=    		Magnific Popup		      =
=============================================*/
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
		enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});


/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}


})(jQuery);