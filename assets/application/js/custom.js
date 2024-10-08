$(document).ready(function() {
    "use strict";
	
    // ===========Featured Owl Carousel============
    var objowlcarousel = $(".owl-carousel-featured");
    if (objowlcarousel.length > 0) {
        objowlcarousel.owlCarousel({
            responsive: {
                0: {
                    items: 1,
				},
                600: {
                    items: 1,
                    nav: false
				},
                1000: {
                    items: 2,
				},
                1200: {
                    items: 2,
				},
			},
			items: 2,
			lazyLoad: true,
            pagination: true,
            loop: true,
			dots: true,
            autoPlay: 2000,
            navigation: true,
            stopOnHover: true,
            nav: true,
            navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});
	}
	
    // ===========Category Owl Carousel============
    var objowlcarousel = $(".owl-carousel-category");
    if (objowlcarousel.length > 0) {
        objowlcarousel.owlCarousel({
            responsive: {
                0: {
                    items: 3,
				},
                600: {
                    items: 5,
                    nav: false
				},
                1000: {
                    items: 8,
				},
                1200: {
                    items: 8,
				},
			},
            items: 8,
            lazyLoad: true,
            pagination: false,
            loop: true,
			dots: false,
            autoPlay: 2000,
            navigation: true,
            stopOnHover: true,
            nav: true,
            navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});
	}
	
    // ===========Right Sidebar============
    // $('[data-toggle="offcanvas"]').on('click', function() {
        // $('body').toggleClass('toggled');
	// });
	
    // ===========Slider============
    var mainslider = $(".owl-carousel-slider");
    if (mainslider.length > 0) {
        mainslider.owlCarousel({
            items: 1,
            dots: false,
            lazyLoad: true,
            pagination: true,
            autoPlay: 4000,
            loop: true,
            singleItem: true,
            navigation: true,
            stopOnHover: true,
            nav: true,
            navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});
	}
	
    // ===========Select2============
    // $('select').select2();
	
    // ===========Tooltip============
    // $('[data-toggle="tooltip"]').tooltip()
	
    // ===========Single Items Slider============   
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    sync1.owlCarousel({
        singleItem: true,
        items: 1,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 2500,
		dots: false,
        nav: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
	});
    sync2.owlCarousel({
        items: 5,
        navigation: true,
        dots: false,
        pagination: false,
        nav: true,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveRefreshRate: 100,
        afterInit: function(el) {
            el.find(".owl-item").eq(0).addClass("synced");
		}
	});
	
    function syncPosition(el) {
        var current = this.currentItem;
        $("#sync2")
		.find(".owl-item")
		.removeClass("synced")
		.eq(current)
		.addClass("synced")
        if ($("#sync2").data("owlCarousel") !== undefined) {
            center(current)
		}
	}
    $("#sync2").on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
	});
	
    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
			}
		}
        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
				} else {
                if (num - 1 === -1) {
                    num = 0;
				}
                sync2.trigger("owl.goTo", num);
			}
			} else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
			} else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
		}
	}
	// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	// })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	// ga('create', 'UA-120909275-1', 'auto');
	// ga('send', 'pageview');
	
});