$(document).ready(function() {
    var $nav = $('#main-nav');
    var $toggle = $('.toggle');
    var data = {};
    var defaultData = {
        maxWidth: false,
        customToggle: $toggle,
        navTitle: 'All Categories',
        levelTitles: true,
        pushContent: '#container'
    };

    // calling like this only for demo purposes

    const initNav = function(conf) {
        var $old = $('.hc-offcanvas-nav');

        setTimeout(function() {
            if ($old.length) {
                // clear previous instance
                $old.remove();
            }
        }, $toggle.hasClass('toggle-open') ? 420 : 0);

        if ($toggle.hasClass('toggle-open')) {
            $toggle.click();
        }

        // remove old toggle click event
        $toggle.off('click');

        // remember data
        $.extend(data, conf)

        // call the plugin
        $nav.clone().hcOffcanvasNav($.extend({}, defaultData, data));
    }

    // run first demo
    initNav({});

    $('.actions').find('a').on('click', function(e) {
        e.preventDefault();

        var $this = $(this).addClass('active');
        var $siblings = $this.parent().siblings().children('a').removeClass('active');

        initNav(eval('(' + $this.data('demo') + ')'));
    });

    $('.actions').find('input').on('change', function() {
        var $this = $(this);
        var data = eval('(' + $this.data('demo') + ')');

        if ($this.is(':checked')) {
            initNav(data);
        } else {
            var removeData = {};
            $.each(data, function(index, value) {
                removeData[index] = false;
            });
            initNav(removeData);
        }
    });


});

$(document).ready(function() {
     $('.feed_back_slide').owlCarousel({
        // Enable thumbnails
        loop: true,
        margin: 30,
        autoplay: true,
        // animateOut: 'fadeOut',

        nav: false,
        items: 3,
        dots: true,
        smartSpeed: 500,

        mouseDrag: true,
        pullDrag: true,
        touchDrag: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        responsive: {
            0:{
              items: 1
            },
            480:{
              items: 1
            },
            769:{
              items: 3
            }
        }

    });
     $('.slide_partner').owlCarousel({
        // Enable thumbnails
        loop: true,
        margin: 30,
        autoplay: false,
        // animateOut: 'fadeOut',

        nav: false,
        items: 5,
        dots: false,
        smartSpeed: 500,

        mouseDrag: true,
        pullDrag: true,
        touchDrag: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',

    });
    $('.owl-carousel').owlCarousel({
        // Enable thumbnails
        loop: true,
        margin: 0,
        autoplay: true,
        // animateOut: 'fadeOut',

        nav: false,
        items: 1,
        dots: true,
        smartSpeed: 500,

        mouseDrag: true,
        pullDrag: true,
        touchDrag: true,
        thumbs: true,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',

    });

    $(".owl-prev ").html('<i class="fa fa-chevron-left" aria-hidden="true"></i>');
    $(".owl-next ").html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
    
});
$(document).ready(function() {
    $(".that_category").click(function(e) {
        /* Act on the event */
        e.preventDefault();
        var that = $(this);
        $(this).closest('li').find('.sub_category').slideToggle();
        // $(this).closest('li').find('.that_category').css('font-weight','bold');
    });
});
