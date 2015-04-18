jQuery.noConflict();
jQuery(document).ready(function($){

	"use strict";	
	function megaMenu() {
		var screenWidth = $(document).width(),
			containerWidth = $(".container").width(),
			containerMinuScreen = (screenWidth - containerWidth)/2;
			
		$("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){
			var ParentLeftPosition = $(this).parent("li.menu-item-megamenu-parent").offset().left,
			MegaMenuChildContainerWidth = $(this).width();

			if( (ParentLeftPosition + MegaMenuChildContainerWidth) > containerWidth ){
						   
			   var marginFromLeft = ( ParentLeftPosition + MegaMenuChildContainerWidth ) - screenWidth;
			   var marginLeftFromContainer = containerMinuScreen + marginFromLeft + 20;
							   
			   if( MegaMenuChildContainerWidth > containerWidth ){
				 var MegaMinuContainer        = ( (MegaMenuChildContainerWidth - containerWidth)/2 ) + 10;
				 var marginLeftFromContainerVal = marginLeftFromContainer - MegaMinuContainer;
				 marginLeftFromContainerVal = "-"+marginLeftFromContainerVal+"px";
				 $(this).css('left',marginLeftFromContainerVal);
			   }
			   else {
				 marginLeftFromContainer = "-"+marginLeftFromContainer+"px";
				 $(this).css('left',marginLeftFromContainer);
			   }
			}
		});
	}
	
	megaMenu();
	$(window).smartresize(function(){
		megaMenu();
	});
	
	//MENU HOVER ANIMATION...
	$("li.menu-item-depth-0,li.menu-item-simple-parent ul li" ).hover(function(){
		//mouseover 
		if( $(this).find(".megamenu-child-container").length  ){
			$(this).find(".megamenu-child-container").stop(true, true).slideDown('slow', 'easeOutQuad');
		} else {
			$(this).find("> ul.sub-menu").stop(true, true).slideDown('slow', 'easeOutQuad');
		}
		
	},function(){
		//mouseout
		if( $(this).find(".megamenu-child-container").length ){
			$(this).find(".megamenu-child-container").stop(true, true).hide();
		} else {
			$(this).find('> ul.sub-menu').stop(true, true).hide(); 
		}
	});
	
	//NICE SCROLL...
	if(typeof mytheme_urls !== 'undefined') {
        if (mytheme_urls.scroll == "enable") {
            $("html").niceScroll({
                zindex: 999999,
                cursorborder: "1px solid #424242"
            });
        }
    }

	//STICKY NAV MENU....
	if(mytheme_urls.stickynav === "enable") {
		$("#header-wrapper").sticky({ topSpacing: 0 });
	}
	
	//MOBILE MENU...
	$('nav#main-menu > ul').mobileMenu({
      defaultText: 'Navigate to...',
      className: 'mobile-menu',
      subMenuDash: '&ndash;&nbsp;'
	});
								
	//TEXTBOX CLEAR...
	$('input.Textbox, textarea.Textbox').focus(function() {
      if (this.value === this.title) {
        $(this).val("");
      }}).blur(function() {
      if (this.value === "") {
        $(this).val(this.title);
      }
    });
	
	//UI TO TOP PLUGIN...
	$().UItoTop({ easingType: 'easeOutQuart' });
	
	//SIDEBAR MENU ITEM...
	if($('ul.j-load-all').length){
		$('ul.j-load-all li:first').addClass('current_page_item');
		
		$('ul.j-load-all li a').click(function(){
			$('ul.j-load-all').find('li').removeClass('current_page_item');
			$(this).parent('li').addClass("current_page_item");
		});
		
		var $top_space = 10;
		if(mytheme_urls.stickynav === "enable") $top_space = 150;
		
		$("ul.j-load-all").sticky({ topSpacing: $top_space, getWidthFrom: $('.menu-sidebar'), center: true });
	}
	
	//DONUT CHART...
	$('.donutChart').each(function(){
		$(this).one('inview', function (event, visible) {
			if(visible === true) {
				var bgcolor, fgcolor = "";
				
				if($(this).attr('data-bgcolor') !== "") bgcolor = $(this).attr('data-bgcolor'); else bgcolor = '#f5f5f5';
				if($(this).attr('data-fgcolor') !== "") fgcolor = $(this).attr('data-fgcolor'); else fgcolor = '#E74D3C';
				
				$(this).donutchart({'size': 140, 'donutwidth': 10, 'fgColor': fgcolor, 'bgColor': bgcolor, 'textsize': 45 });
				$(this).donutchart('animate');
			}
		}); 
	});
	
    //ISOTOPE CATEGORY...
    var $container = $('.gallery-container');
    var $gw;

    if ($('.gallery-container .gallery').hasClass('with-sidebar')) {
        if ($(".container").width() == 710 && ($('.gallery-container .gallery').hasClass('dt-sc-one-half') || $('.gallery-container .gallery').hasClass('dt-sc-one-fourth'))) {
            $gw = 10;
        } else {
            $gw = 14;
        }
    } else {
        if (($(".container").width() == 710 || $(".container").width() == 900) && ($('.gallery-container .gallery').hasClass('dt-sc-one-half') || $('.gallery-container .gallery').hasClass('dt-sc-one-fourth'))) {
            $gw = 15;
        } else {
            $gw = 20;
        }
    }

    $('.sorting-container a').click(function () {
        $('.sorting-container').find('a').removeClass('active-sort');
        $(this).addClass('active-sort');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
                columnWidth: $('.gallery-container .gallery').width(),
                gutterWidth: $gw
            }
        });
        return false;
    });

    //ISOTOPE...
    if ($container.length) {
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
                columnWidth: $('.gallery-container .gallery').width(),
                gutterWidth: $gw
            }
        });
    }
	
	//PRETTYPHOTO...
    var $pphoto = $('a[data-gal^="prettyPhoto[gallery]"]');
    if ($pphoto.length) {
        $("a[data-gal^='prettyPhoto[gallery]']").prettyPhoto({
            show_title: false,
            social_tools: false,
            deeplinking: false
        });
    }
	
    //Gallery Slider
	if( ($(".gallery-slider").length) && ($(".gallery-slider li").length > 1) ) {
		$('.gallery-slider').bxSlider({ auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true });
	}
	
	//FITVIDS...
	$("div.dt-video-wrap").fitVids();
	
	//BLOG GALLERY SLIDER...
    if( ($("ul.entry-gallery-post-slider").length) && ( $("ul.entry-gallery-post-slider li").length > 1 ) ){
     $("ul.entry-gallery-post-slider").bxSlider({auto:false, video:true, useCSS:false, pager:'', autoHover:true, adaptiveHeight:true});
    }
	
});

// ANUMATE CSS + JQUERY INVIEW CONFIGURATION
(function ($) {
    "use strict";
    $(".animate").each(function () {
        $(this).bind('inview', function (event, visible) {
            var $delay = "";
            var $this = $(this),
                $animation = ($this.data("animation") !== undefined) ? $this.data("animation") : "slideUp";
            $delay = ($this.data("delay") !== undefined) ? $this.data("delay") : 300;

            if (visible === true) {
                setTimeout(function () {
                    $this.addClass($animation);
                }, $delay);
            } else {
                setTimeout(function () {
                    $this.removeClass($animation);
                }, $delay);
            }
        });
    });

})(jQuery);