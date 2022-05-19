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
        var image =jQuery(e.relatedTarget).find('img[data-src]');
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    jQuery('.form-search').on('submit', function () {
        var qval = $.trim( $('input[name="q"]', this).val() );
        if(qval==''){
            alert('Vui lòng nhập từ khóa tìm kiếm');
            return false;
        }
    });
    jQuery(function(){
        $("img.lazyload").lazyload();
    });

    jQuery(window).bind("scroll",function(){
        if( jQuery(this).scrollTop() > $(".hdr").height() ){
            $("#scroll_top_icon").fadeIn(300);
        }else{
            $("#scroll_top_icon").fadeOut(300);
        }
    });

    jQuery("#scroll_top_icon").off("click").on("click", function(){
        jQuery("html, body").animate({scrollTop:0}, "slow");
    });
     jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
});

( function() {
    var youtube = document.querySelectorAll( ".youtube" );
    for (var i = 0; i < youtube.length; i++) {
        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
        var image = new Image();
                image.src = source;
                image.addEventListener( "load", function() {
                    youtube[ i ].appendChild( image );
                }( i ) );
                youtube[i].addEventListener( "click", function() {
                    var iframe = document.createElement( "iframe" );
                    iframe.setAttribute( "frameborder", "0" );
                    iframe.setAttribute( "allowfullscreen", "" );
                    iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
                       this.innerHTML = "";
                       this.appendChild( iframe );
                } );   
    };   
} )();

(function(a,b,c){var d=a.history,e=document,f=navigator||{},g=localStorage,
  h=encodeURIComponent,i=d.pushState,k=function(){return Math.random().toString(36)},
  l=function(){return g.cid||(g.cid=k()),g.cid},m=function(r){var s=[];for(var t in r)
  r.hasOwnProperty(t)&&void 0!==r[t]&&s.push(h(t)+"="+h(r[t]));return s.join("&")},
  n=function(r,s,t,u,v,w,x){var z="https://www.google-analytics.com/collect",
  A=m({v:"1",ds:"web",aip:c.anonymizeIp?1:void 0,tid:b,cid:l(),t:r||"pageview",
  sd:c.colorDepth&&screen.colorDepth?screen.colorDepth+"-bits":void 0,dr:e.referrer||
  void 0,dt:e.title,dl:e.location.origin+e.location.pathname+e.location.search,ul:c.language?
  (f.language||"").toLowerCase():void 0,de:c.characterSet?e.characterSet:void 0,
  sr:c.screenSize?(a.screen||{}).width+"x"+(a.screen||{}).height:void 0,vp:c.screenSize&&
  a.visualViewport?(a.visualViewport||{}).width+"x"+(a.visualViewport||{}).height:void 0,
  ec:s||void 0,ea:t||void 0,el:u||void 0,ev:v||void 0,exd:w||void 0,exf:"undefined"!=typeof x&&
  !1==!!x?0:void 0});if(f.sendBeacon)f.sendBeacon(z,A);else{var y=new XMLHttpRequest;
  y.open("POST.html",z,!0),y.send(A)}};d.pushState=function(r){return"function"==typeof d.onpushstate&&
  d.onpushstate({state:r}),setTimeout(n,c.delay||10),i.apply(d,arguments)},n(),
  a.ma={trackEvent:function o(r,s,t,u){return n("event",r,s,t,u)},
  trackException:function q(r,s){return n("exception",null,null,null,null,r,s)}}})
  (window,"UA-132743557-1",{anonymizeIp:true,colorDepth:true,characterSet:true,screenSize:true,language:true});
  
  function init() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i=0; i<vidDefer.length; i++) {
    if(vidDefer[i].getAttribute('data-src')) {
    vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
    } } }
    window.onload = init;
    jQuery(".news-view img").each(function() {	
        jQuery(this).attr("src", jQuery(this).attr("src").replace("http://", "https:///"));
        jQuery(this).addClass("lazyload");        
        jQuery(this).attr("data-original",
        jQuery(this).attr("src"));        
        jQuery(this).removeAttr("src");    	
        });
        $(".other-product img").each(function() {	
        jQuery(this).attr("src", jQuery(this).attr("src").replace("http://", "https:///"));
        jQuery(this).addClass("lazyload");        
        jQuery(this).attr("data-original",
        jQuery(this).attr("src"));        
        jQuery(this).removeAttr("src");    	
        });
        $(".news-view source").each(function() {	
        jQuery(this).attr("srcset", jQuery(this).attr("srcset").replace("http://", "https:///"));	
        jQuery(this).addClass("lazyload");        
        jQuery(this).attr("data-srcset",jQuery(this).attr("srcset"));        
        jQuery(this).removeAttr("srcset");    	
        });
        $("iframe").each(function() {		
        jQuery(this).addClass("lazyload");        		
        jQuery(this).attr("data-src",jQuery(this).attr("src"));        		
        jQuery(this).removeAttr("src");    
        });
