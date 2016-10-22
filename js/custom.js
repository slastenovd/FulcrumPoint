$(document).ready(function($) {
    "use strict";
    
    /* ======= Full Screen Background ======= */

    $(".full-page").height($(window).height());
    $(window).resize(function() {
        $(".full-page").height($(window).height());
    });

    /* ======= Page Scrolling Plugin ======= */
    
    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    /* ======= Dropdown Menu On Hover ======= */

    $.fn.bootstrapDropdownHover();

    /* ======= Accordions ======= */
   
    var allPanels = $(".accordion > dd").hide();
    allPanels.first().slideDown("easeOutExpo");
    $(".accordion > dt > a").first().addClass("active");

    $(".accordion > dt > a").click(function() {

        var current = $(this).parent().next("dd");
        $(".accordion > dt > a").removeClass("active");
        $(this).addClass("active");
        allPanels.not(current).slideUp("easeInExpo");
        $(this).parent().next().slideDown("easeOutExpo");
        return false;
    });

    /* ======= Parallax  ======= */

    $.stellar({
        responsive: true,
        horizontalScrolling: false,
        verticalOffset: 0
    });


    /* ======= Revolution slider  ======= */

    if ($('.tt-banner').length > 0) {
        jQuery(".tt-banner").revolution({
            delay: 6000,
            onHoverStop: "off",
            hideThumbs: 10,
            hideTimerBar: "on",
            navigationType: "none",
            navigationStyle: "preview1",
            fullWidth: "off",
            fullScreenOffsetContainer: "",
        });
        jQuery(".tt-banner").show();
    }


    /* ======= Counter  ======= */
    function countUp() {
        var dataperc;
        $('.statistic-percent').each(function() {
            dataperc = $(this).attr('data-perc'),
                $(this).find('.percentfactor').delay(6000).countTo({
                    from: 0, // number to begin counting
                    to: dataperc,
                    speed: 1000, // ms
                    refreshInterval: 10,
                });
        });
    }
    $('.statistic-percent').waypoint(function() {
        countUp();
    }, {
        offset: '95%',
        triggerOnce: true
    });


    /* === magnificPopup === */
    $(window).load(function() {
        $('.tt-lightbox').magnificPopup({
            type: 'image',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            fixedContentPos: false
                // other options
        });
        /* ======= shuffle js ======= */
        if ($('#portfolio-grid').length > 0) {
            /* initialize shuffle plugin */
            var $grid = $('#portfolio-grid');

            $grid.shuffle({
                itemSelector: '.portfolio-item' // the selector for the items in the grid
            });

            /* reshuffle when user clicks a filter item */
            $('#filter li').on('click', function(e) {
                e.preventDefault();

                // set active class
                $('#filter li').removeClass('active');
                $(this).addClass('active');

                // get group name from clicked item
                var groupName = $(this).attr('data-group');

                // reshuffle grid
                $grid.shuffle('shuffle', groupName);
            });
        }

    });

});