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
        });
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

    jQuery('[data-fancybox]').fancybox();
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
    jQuery(function () {
        jQuery("img.lazyload").lazyload();
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
    }
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
jQuery(".vh-content img").each(function () {
    jQuery(this).attr("src", jQuery(this).attr("src").replace("http://", "https:///"));
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-original",
        jQuery(this).attr("src"));
    jQuery(this).removeAttr("src");
});
jQuery(".mrg-btm-30 img").each(function () {
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
jQuery("iframe").each(function () {
    jQuery(this).addClass("lazyload");
    jQuery(this).attr("data-src", jQuery(this).attr("src"));
    jQuery(this).removeAttr("src");
});

function blockUI(msg) {
    jQuery.blockUI({
        message: msg,
        onOverlayClick: jQuery.unblockUI
    });
}

function showPriceDesc() {
    var desc = jQuery.trim(jQuery('.carousel-inner ._active').data('description'));
    if (desc) {
        jQuery('.price_desc .ct').html(desc).show();
    } else {
        jQuery('.price_desc .ct').html('').hide();
    }
}

showPriceDesc();

jQuery(function () {

    jQuery('#btn_support_mb').fancybox();

    jQuery('.cart-opts .input-group-addon:first-child').on('click', function () {
        var count = parseInt(jQuery('.cart-opts .form-control').val());
        count--;
        if (count < 0)
            count = 0;
        jQuery('.cart-opts .form-control').val(count);
    });

    jQuery('.cart-opts .input-group-addon:last-child').on('click', function (e) {
        var count = parseInt(jQuery('.cart-opts .form-control').val());
        count++;
        jQuery('.cart-opts .form-control').val(count);

    });

    jQuery('.cart-opts .add-to-cart').on('click', function (e) {
        var sendData = {
            count: parseInt(jQuery('.cart-opts .form-control').val()),
            id: '1902',
            priceId: null
        };

        var jQuerymodel_list = jQuery('.model_list');
        if (jQuerymodel_list.length) {
            sendData.priceId = jQuery('li.active', jQuerymodel_list).data('id');
        }

        jQuery.ajax({
            url: 'https://ngocanh.com/addcart',
            data: sendData,
            type: 'post',
            success: function (res) {
                if (res.success) {
                    jQuery('[id="cart-count"]').html(res.count);
                    jQuery.fancybox(res.html, {
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

    jQuery(document).on('click', '.fancybox-skin .carpopup .close-popup', function (e) {
        e.preventDefault();
        jQuery.fancybox.close();
        return false;
    });

    jQuery(document).on('click', '.carpopup .update', function (e) {
        e.preventDefault();
        var jQuerytr = jQuery(this).closest('tr');
        var productId = jQuerytr.data('id'),
            that = this;
        var count = parseInt(jQuerytr.find('input.count').val());
        if (isNaN(count) || count <= 0) {
            alert('Số lượng phải >= 1.');
            return false;
        }
        jQuery.ajax({
            type: 'post',
            data: {
                'id': productId,
                'count': count,
                'action': 'update'
            },
            url: 'https://ngocanh.com/addcart',
            success: function (res) {
                if (res.hasOwnProperty('success') && res.success) {
                    jQuery('[id="cart-count"]').html(res.count);
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

    jQuery(document).on('click', '.carpopup .delete', function (e) {
        e.preventDefault();
        var productId = jQuery(this).closest('tr').data('id'),
            that = this;
        if (confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng?')) {
            jQuery.ajax({
                type: 'post',
                data: {
                    'id': productId,
                    'action': 'remove'
                },
                url: 'https://ngocanh.com/addcart',
                success: function (res) {
                    if (res.hasOwnProperty('success') && res.success) {
                        jQuery('.products .item .icon.buy[data-id="' + productId + '"]')
                            .data('cartadded', null);
                        jQuery('[id="cart-count"]').html(res.count);
                        jQuery(that).closest('tr').remove();
                        if (res.count > 0) {
                            jQuery.fancybox.update();
                        } else {
                            jQuery.fancybox(res.html, {
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

    jQuery('.vh-content').each(function () {
        if (jQuery(this).height() > 1100) {
            jQuery(this).addClass('scrollHide');
            jQuery(this).append(
                jQuery(
                    '<div class="more-view-shadown"><span class="btn btn-default">Xem thêm</span> </div>'
                )
            );
        }
    });

    jQuery(document).on('click', '.scrollHide .more-view-shadown .btn', function (e) {
        e.preventDefault();
        jQuery(this).closest('.scrollHide').removeClass('scrollHide').addClass('scrollShow');
        jQuery(this).html('Thu gọn');
    });

    jQuery(document).on('click', '.scrollShow .more-view-shadown .btn', function (e) {
        e.preventDefault();
        jQuery(this).closest('.scrollShow').removeClass('scrollShow').addClass('scrollHide');
        jQuery(this).html('Xem thêm');
    });

    // jQuery(document).on('click', '#comment-btn', function () {
    //     jQuery('.box-comment').toggleClass('hidden');
    //     return false;
    // });

    // jQuery(document).on('click', '.box-comment > ul li a', function () {
    //     jQuery('.box-comment > ul li').removeClass('active');
    //     jQuery(this).parent().addClass('active');
    //
    //     jQuery('.box-comment .frm').addClass('hidden');
    //     jQuery(jQuery(this).attr('href')).removeClass('hidden');
    //     return false;
    // });

    jQuery(document).on('change', '.price_row input', function () {
        jQuery(this).closest('.carousel-inner').find('._active').removeClass('_active');
        jQuery(this).closest('.price_row').addClass('_active');
        showPriceDesc();
    });
});
jQuery(function () {
    jQuery('#image-gallery').lightSlider({
        gallery: true,
        item: 1,
        thumbItem: 4,
        slideMargin: 0,
        speed: 500,
        auto: false,
        loop: true,
        onSliderLoad: function (el) {
            jQuery('#image-gallery').removeClass('cS-hidden');
            var jQuerychildren = jQuery(el).children();
            var alt = null;
            jQuery.each(jQuerychildren, function () {
                alt = jQuery('img:eq(0)', this).attr('alt');
                jQuery('img:eq(1)', this).attr('alt', alt);
            });
        }
    });

    if (jQuery && jQuery.fn.zoom) {
        jQuery('#image-gallery li').zoom();
    }
});
//end chi tiet san pham
