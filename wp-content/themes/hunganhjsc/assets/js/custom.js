jQuery(function () {
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
        var image = jQuery(e.relatedTarget).find('img[data-src]');
        image.attr('src', image.data('src'));
        image.removeAttr('data-src');
    });

    jQuery('.video img').on('click', function () {
        jQuery(this).hide();
        jQuery('#video_frm').attr('src', jQuery(this).data('video')).removeClass('hidden');
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
jQuery(function () {
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
        jQuery("html, body").animate({scrollTop: 0}, "slow");
    });
    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {passive: !ns.includes("noPreventDefault")});
        }
    };
    jQuery.event.special.touchmove = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchmove", handle, {passive: !ns.includes("noPreventDefault")});
        }
    };
});

(function () {
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
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1");
            this.innerHTML = "";
            this.appendChild(iframe);
        });
    }
    ;
})();

function init() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i = 0; i < vidDefer.length; i++) {
        if (vidDefer[i].getAttribute('data-src')) {
            vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
        }
    }
}

window.onload = init;
jQuery(".news-view img").each(function () {
    jQuery(this).attr("src", jQuery(this).attr("src").replace("http://", "https:///"));
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-original",
        jQuery(this).attr("src"));
    jQuery(this).removeAttr("src");
});
jQuery(".other-product img").each(function () {
    jQuery(this).attr("src", jQuery(this).attr("src").replace("http://", "https:///"));
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-original",
        jQuery(this).attr("src"));
    jQuery(this).removeAttr("src");
});
jQuery(".news-view source").each(function () {
    jQuery(this).attr("srcset", jQuery(this).attr("srcset").replace("http://", "https:///"));
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-srcset", jQuery(this).attr("srcset"));
    jQuery(this).removeAttr("srcset");
});
jQuery("iframe").each(function () {
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-src", jQuery(this).attr("src"));
    jQuery(this).removeAttr("src");
});
//js trang chi tiet san pham
var Tawk_API = Tawk_API || {},
Tawk_LoadStart = new Date();
(function () {
var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
s1.async = true;
s1.src = 'https://embed.tawk.to/5cd705b32846b90c57ae052f/default';
s1.charset = 'UTF-8';
s1.setAttribute('crossorigin', '*');
s0.parentNode.insertBefore(s1, s0);
})();
$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    $('.form-search').on('submit', function () {
        var qval = $.trim($('input[name="q"]', this).val());
        if (qval == '') {
            alert('Vui lòng nhập từ khóa tìm kiếm');
            return false;
        }
    });
    $(function () {
        $("img.lazyload").lazyload();
    });

    $(window).bind("scroll", function () {
        if ($(this).scrollTop() > $(".hdr").height()) {
            $("#scroll_top_icon").fadeIn(300);
        } else {
            $("#scroll_top_icon").fadeOut(300);
        }
    });

    $("#scroll_top_icon").off("click").on("click", function () {
        $("html, body").animate({
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
});
(function () {
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
    };
})();
(function (a, b, c) {
    var d = a.history,
        e = document,
        f = navigator || {},
        g = localStorage,
        h = encodeURIComponent,
        i = d.pushState,
        k = function () {
            return Math.random().toString(36)
        },
        l = function () {
            return g.cid || (g.cid = k()), g.cid
        },
        m = function (r) {
            var s = [];
            for (var t in r)
                r.hasOwnProperty(t) && void 0 !== r[t] && s.push(h(t) + "=" + h(r[t]));
            return s.join("&")
        },
        n = function (r, s, t, u, v, w, x) {
            var z = "https://www.google-analytics.com/collect",
                A = m({
                    v: "1",
                    ds: "web",
                    aip: c.anonymizeIp ? 1 : void 0,
                    tid: b,
                    cid: l(),
                    t: r || "pageview",
                    sd: c.colorDepth && screen.colorDepth ? screen.colorDepth + "-bits" : void 0,
                    dr: e.referrer ||
                        void 0,
                    dt: e.title,
                    dl: e.location.origin + e.location.pathname + e.location.search,
                    ul: c.language ?
                        (f.language || "").toLowerCase() : void 0,
                    de: c.characterSet ? e.characterSet : void 0,
                    sr: c.screenSize ? (a.screen || {}).width + "x" + (a.screen || {}).height : void 0,
                    vp: c.screenSize &&
                        a.visualViewport ? (a.visualViewport || {}).width + "x" + (a.visualViewport ||
                            {}).height : void 0,
                    ec: s || void 0,
                    ea: t || void 0,
                    el: u || void 0,
                    ev: v || void 0,
                    exd: w || void 0,
                    exf: "undefined" != typeof x &&
                        !1 == !!x ? 0 : void 0
                });
            if (f.sendBeacon) f.sendBeacon(z, A);
            else {
                var y = new XMLHttpRequest;
                y.open("POST.html", z, !0), y.send(A)
            }
        };
    d.pushState = function (r) {
            return "function" == typeof d.onpushstate &&
                d.onpushstate({
                    state: r
                }), setTimeout(n, c.delay || 10), i.apply(d, arguments)
        }, n(),
        a.ma = {
            trackEvent: function o(r, s, t, u) {
                return n("event", r, s, t, u)
            },
            trackException: function q(r, s) {
                return n("exception", null, null, null, null, r, s)
            }
        }
})
(window, "UA-132743557-1", {
    anonymizeIp: true,
    colorDepth: true,
    characterSet: true,
    screenSize: true,
    language: true
});
function init() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i = 0; i < vidDefer.length; i++) {
        if (vidDefer[i].getAttribute('data-src')) {
            vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
        }
    }
}
window.onload = init;
$(".vh-content img").each(function () {
    $(this).attr("src", $(this).attr("src").replace("http://", "https:///"));
    $(this).addClass("lazyload");
    $(this).attr("data-original",
        $(this).attr("src"));
    $(this).removeAttr("src");
});
$(".mrg-btm-30 img").each(function () {
    $(this).attr("src", $(this).attr("src").replace("http://", "https:///"));
    $(this).addClass("lazyload");
    $(this).attr("data-original",
        $(this).attr("src"));
    $(this).removeAttr("src");
});
$(".other-product img").each(function () {
    $(this).attr("src", $(this).attr("src").replace("http://", "https:///"));
    $(this).addClass("lazyload");
    $(this).attr("data-original",
        $(this).attr("src"));
    $(this).removeAttr("src");
});
$("iframe").each(function () {
    $(this).addClass("lazyload");
    $(this).attr("data-src", $(this).attr("src"));
    $(this).removeAttr("src");
});
function blockUI(msg) {
    $.blockUI({
        message: msg,
        onOverlayClick: $.unblockUI
    });
}

function showPriceDesc() {
    var desc = $.trim($('.carousel-inner ._active').data('description'));
    if (desc) {
        $('.price_desc .ct').html(desc).show();
    } else {
        $('.price_desc .ct').html('').hide();
    }
}

showPriceDesc();

$(function () {

    $('#btn_support_mb').fancybox();

    $('.cart-opts .input-group-addon:first-child').on('click', function () {
        var count = parseInt($('.cart-opts .form-control').val());
        count--;
        if (count < 0)
            count = 0;
        $('.cart-opts .form-control').val(count);
    });

    $('.cart-opts .input-group-addon:last-child').on('click', function (e) {
        var count = parseInt($('.cart-opts .form-control').val());
        count++;
        $('.cart-opts .form-control').val(count);

    });

    $('.cart-opts .add-to-cart').on('click', function (e) {
        var sendData = {
            count: parseInt($('.cart-opts .form-control').val()),
            id: '1902',
            priceId: null
        };

        var $model_list = $('.model_list');
        if ($model_list.length) {
            sendData.priceId = $('li.active', $model_list).data('id');
        }

        $.ajax({
            url: 'https://ngocanh.com/addcart',
            data: sendData,
            type: 'post',
            success: function (res) {
                if (res.success) {
                    $('[id="cart-count"]').html(res.count);
                    $.fancybox(res.html, {
                        minHeight: 0,
                        padding: 0
                    });

                    // blockUI('Thêm vào giỏ hàng thành công!<p><a href="/gio-hang" rel="nofollow"><strong>Xem GIỎ HÀNG</strong></a> hoặc <a href="/"><strong>Tiếp tục MUA HÀNG</strong></a></p>');
                } else {
                    console.log(res);
                    blockUI(
                        'Thêm vào giỏ hàng không thành công. Vui lòng thử lại!');
                }
            },
            error: function (err) {
                console.log(err);
                blockUI('Thêm vào giỏ hàng không thành công. Vui lòng thử lại!');
            }
        });
    });

    $(document).on('click', '.fancybox-skin .carpopup .close-popup', function (e) {
        e.preventDefault();
        $.fancybox.close();
        return false;
    });

    $(document).on('click', '.carpopup .update', function (e) {
        e.preventDefault();
        var $tr = $(this).closest('tr');
        var productId = $tr.data('id'),
            that = this;
        var count = parseInt($tr.find('input.count').val());
        if (isNaN(count) || count <= 0) {
            alert('Số lượng phải >= 1.');
            return false;
        }
        $.ajax({
            type: 'post',
            data: {
                'id': productId,
                'count': count,
                'action': 'update'
            },
            url: 'https://ngocanh.com/addcart',
            success: function (res) {
                if (res.hasOwnProperty('success') && res.success) {
                    $('[id="cart-count"]').html(res.count);
                } else {
                    blockUI('Lỗi. Vui lòng thử lại!');
                }
            },
            error: function (err) {
                alert(err.responseText);
            }
        });
        return false;
    });

    $(document).on('click', '.carpopup .delete', function (e) {
        e.preventDefault();
        var productId = $(this).closest('tr').data('id'),
            that = this;
        if (confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng?')) {
            $.ajax({
                type: 'post',
                data: {
                    'id': productId,
                    'action': 'remove'
                },
                url: 'https://ngocanh.com/addcart',
                success: function (res) {
                    if (res.hasOwnProperty('success') && res.success) {
                        $('.products .item .icon.buy[data-id="' + productId + '"]')
                            .data('cartadded', null);
                        $('[id="cart-count"]').html(res.count);
                        $(that).closest('tr').remove();
                        if (res.count > 0) {
                            $.fancybox.update();
                        } else {
                            $.fancybox(res.html, {
                                minHeight: 0
                            });
                        }
                    } else {
                        blockUI('Lỗi. Vui lòng thử lại!');
                    }
                },
                error: function (err) {
                    alert(err.responseText);
                }
            });
        }
        return false;
    });

    $('.vh-content').each(function () {
        if ($(this).height() > 1100) {
            $(this).addClass('scrollHide');
            $(this).append(
                $(
                    '<div class="more-view-shadown"><span class="btn btn-default">Xem thêm</span> </div>'
                    )
            );
        }
    });

    $(document).on('click', '.scrollHide .more-view-shadown .btn', function (e) {
        e.preventDefault();
        $(this).closest('.scrollHide').removeClass('scrollHide').addClass('scrollShow');
        $(this).html('Thu gọn');
    });

    $(document).on('click', '.scrollShow .more-view-shadown .btn', function (e) {
        e.preventDefault();
        $(this).closest('.scrollShow').removeClass('scrollShow').addClass('scrollHide');
        $(this).html('Xem thêm');
    });

    // $(document).on('click', '#comment-btn', function () {
    //     $('.box-comment').toggleClass('hidden');
    //     return false;
    // });

    // $(document).on('click', '.box-comment > ul li a', function () {
    //     $('.box-comment > ul li').removeClass('active');
    //     $(this).parent().addClass('active');
    //
    //     $('.box-comment .frm').addClass('hidden');
    //     $($(this).attr('href')).removeClass('hidden');
    //     return false;
    // });

    $(document).on('change', '.price_row input', function () {
        $(this).closest('.carousel-inner').find('._active').removeClass('_active');
        $(this).closest('.price_row').addClass('_active');
        showPriceDesc();
    });
});
$(function () {
    $('#image-gallery').lightSlider({
        gallery: true,
        item: 1,
        thumbItem: 4,
        slideMargin: 0,
        speed: 500,
        auto: false,
        loop: true,
        onSliderLoad: function (el) {
            $('#image-gallery').removeClass('cS-hidden');
            var $children = $(el).children();
            var alt = null;
            $.each($children, function () {
                alt = $('img:eq(0)', this).attr('alt');
                $('img:eq(1)', this).attr('alt', alt);
            });
        }
    });

    if ($ && $.fn.zoom) {
        $('#image-gallery li').zoom();
    }
});
//end chi tiet san pham
