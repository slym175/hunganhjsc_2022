$(function () {
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    jQuery('.form-search').on('submit', function () {
        var qval = jQuery.trim(jQuery('input[name="q"]', this).val());
        if (qval == '') {
            alert('Vui lòng nhập từ khóa tìm kiếm');
            return false;
        }
    });

    jQuery(window).bind("scroll", function () {
        if (jQuery(this).scrollTop() > jQuery(".hdr").height()) {
            jQuery("#scroll_top_icon").fadeIn(300);
        } else {
            jQuery("#scroll_top_icon").fadeOut(300);
        }
    });

    jQuery("#scroll_top_icon").off("click").on("click", function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchmove", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };

    var youtube = document.querySelectorAll(".youtube");
    for (var i = 0; i < youtube.length; i++) {
        var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";
        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));
        youtube[i].addEventListener("click", function () {
            var iframe = document.createElement("iframe");
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed +
                "?rel=0&showinfo=0&autoplay=1");
            this.innerHTML = "";
            this.appendChild(iframe);
        });
    }
    ;

    jQuery('.carousel.lazy-load').bind('slide.bs.carousel', function (e) {
        var image = $(e.relatedTarget).find('img[data-src]');
        image.attr('src', image.data('src'));
        image.removeAttr('data-src');
    });

    jQuery('.video img').on('click', function () {
        jQuery(this).hide();
        jQuery('#video_frm').attr('src', $(this).data('video')).removeClass('hidden');
    });

    jQuery('#owl-carousel').owlCarousel({
        navigation: false,
        items: 5,
        loop: true,
        margin: 0,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3600,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            640: {
                items: 2
            },
            767: {
                items: 3
            },
            768: {
                items: 5
            }
        }
    });
});