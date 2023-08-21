var SALA = SALA || {};

(function ($) {
    "use strict";

    function isInViewport(node) {
		let rect = node.getBoundingClientRect()
		return (
			(rect.height > 0 || rect.width > 0) &&
			rect.bottom >= 0 &&
			rect.right >= 0 &&
			rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.left <= (window.innerWidth || document.documentElement.clientWidth)
		)
	}

    SALA.element = {
        init: function() {
            SALA.element.swiper();
            SALA.element.tabs();
            SALA.element.modern_tabs();
            SALA.element.accordion();
            SALA.element.scroll_top();
            SALA.element.header();
            SALA.element.main_menu();
            SALA.element.portfolio_isotope();
            SALA.element.dark_light_switcher();
            SALA.element.nice_select();
            SALA.element.nouislider();
            SALA.element.zoom_image();
            SALA.element.input_number();
            SALA.element.reviews();
            SALA.element.checkout();
            SALA.element.section_pricing();
            SALA.element.section_table();
            SALA.element.section_counter();
            SALA.element.form();
            SALA.element.row();
            SALA.element.circle_progress();
            SALA.element.timeline();
            SALA.element.elasticstack();
            SALA.element.infinite();
            SALA.element.countdown();
    	},

        windowLoad: function() {
            // Begin Isotope
            $(".isotope").each(function () {
                let _this = $(this);
                let grid = _this.find(".grid");
                let $grid = grid.isotope({
                    itemSelector: ".element-item",
                    percentPosition: true,
                    columnWidth: ".grid-sizer",
                });
            });
            // End Isotope

            // Begin Popup Video
            $(".popup-wrapper").each(function () {
                $(this).on("click touchstart", ".icon-popup", function (e) {
                    e.preventDefault();
                    let popup = $(this).closest(".icon-popup").data("popup");
                    let iframe = $("#popup-wrap." + popup).find("iframe");
                    let autoplayoff = iframe
                        .attr("src")
                        .replace("&autoplay=0", "&autoplay=1");
                    $("#popup-wrap." + popup).addClass("is-active");
                    iframe.attr("src", autoplayoff);
                });

                $(".popup-wrap").on(
                    "click touchstart",
                    ".overlay, .close",
                    function (e) {
                        e.preventDefault();
                        let iframe = $(this).closest(".popup-wrap").find("iframe");
                        let autoplayoff = iframe
                            .attr("src")
                            .replace("&autoplay=1", "&autoplay=0");
                        $(this).closest(".popup-wrap").removeClass("is-active");
                        iframe.attr("src", iframe.attr("src"));
                        iframe.attr("src", autoplayoff);
                    }
                );
            });
            // End Popup Video

            // Begin Waypoints
            let $elem = $(".offset-item");
            if( $elem.length > 0 ){
                let waypoints = $elem.waypoint(
                    function (direction) {
                        // Fix for different ver of waypoints plugin.
                        let _self = this.element ? this.element : this;
                        let $self = $(_self);
                        $self.addClass("animate");
                    },
                    {
                        offset: "92%",
                        triggerOnce: true,
                    }
                );
            }
            // End Waypoints
        },

        windowScroll: function() {},

        swiper: function() {
            $(".uxp-swiper-slider").each(function () {
                let data = $(this);
                let pagination = $(this).attr("data-pagination");
                let pagination_style = $(this).attr("data-pagination-style");
                let navigation_prev = data.find( '.swiper-button-prev' )[0];
                let navigation_next = data.find( '.swiper-button-next' )[0];
                let direction = data.attr("data-direction");
                let slide_center = '';
                let slide_loop = '';
                let nav_center = '';
                let gap_xl = parseInt(data.attr("data-gap-xl"));
                let gap_md = parseInt(data.attr("data-gap-md"));
                let xl = parseInt(data.attr("data-xl"));
                let lg = parseInt(data.attr("data-lg"));
                let md = parseInt(data.attr("data-md"));
                let sm = parseInt(data.attr("data-sm"));
                let es = parseInt(data.attr("data-es"));
                let pre_view = 1;
                if (es) {
                    pre_view = es;
                }

                if( data.attr("data-slider-center") === 'true' ){
                    slide_center = true;
                } else {
                    slide_center = false;
                }

                if( data.attr("data-slider-loop") === 'true' ){
                    slide_loop = true;
                } else {
                    slide_loop = false;
                }

                if( data.attr("data-nav-center") === 'true' ){
                    nav_center = true;
                } else {
                    nav_center = false;
                }

                var swiperOptions = {
                    slidesPerView: pre_view,
                    direction: direction,
                    allowTouchMove: true,
                    loop: slide_loop,
                    centeredSlides: slide_center,
                    pagination: {
                        el: "." + pagination,
                        clickable: true,
                    },
                    navigation: {
                        nextEl: navigation_next,
                        prevEl: navigation_prev,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: pre_view,
                            spaceBetween: gap_md,
                        },
                        575: {
                            slidesPerView: sm,
                            spaceBetween: gap_md,
                        },
                        768: {
                            slidesPerView: md,
                            spaceBetween: gap_xl,
                        },
                        992: {
                            slidesPerView: lg,
                            spaceBetween: gap_xl,
                        },
                        1200: {
                            slidesPerView: xl,
                            spaceBetween: gap_xl,
                        },
                    }
                };

                if ( pagination_style === 'fraction' ) {
                    swiperOptions.pagination.type = 'fraction';
                    swiperOptions.pagination.renderCustom = function( swiper, current, total ) {
                        // Convert to string.
                        var currentStr = current.toString();
                        var totalStr = total.toString();

                        // Add leading 0.
                        currentStr = currentStr.padStart( 2, '0' );
                        totalStr = totalStr.padStart( 2, '0' );

                        return '<div class="fraction"><div class="current">' + currentStr + '</div><div class="separator"></div><div class="total">' + totalStr + '</div></div>';
                    };
                } else {
                    swiperOptions.pagination.renderBullet = function (index, className) {
                        swiperOptions.pagination.type = 'bullets';
                        return '<span class="' + className + '"></span>';
                    };
                }

                let swiper = new Swiper(this, swiperOptions);

                if( nav_center === true ){
                    var window_w = $(window).width();
                    var item_w = $(this).find('.swiper-slide').width();
                    var button_w = $(this).find('.swiper-button-next').width();
                    var item_margin = parseInt($(this).find('.swiper-slide').css('margin-right'));
                    var size = (((window_w - item_w) / 2) - (item_margin / 2)) - (button_w / 2);
                    $(this).find('.swiper-button-prev').css( 'left', size + 'px' );
                    $(this).find('.swiper-button-next').css( 'right', size + 'px' );
                }

            });
            $(".thumbs-gallery").each(function () {
                let control_data = $(this).find( '.control-swiper-slider' );
                let control_navigation_prev = control_data.find( '.swiper-button-prev' )[0];
                let control_navigation_next = control_data.find( '.swiper-button-next' )[0];
                let control_pagination = $(this).attr("data-pagination");
                let control_direction = control_data.attr("data-direction");
                let control_slide_center = '';
                let control_slide_loop = '';
                let control_gap_xl = parseInt(control_data.attr("data-gap-xl"));
                let control_gap_md = parseInt(control_data.attr("data-gap-md"));
                let control_xl = parseInt(control_data.attr("data-xl"));
                let control_lg = parseInt(control_data.attr("data-lg"));
                let control_md = parseInt(control_data.attr("data-md"));
                let control_sm = parseInt(control_data.attr("data-sm"));
                let control_es = parseInt(control_data.attr("data-es"));
                let control_pre_view = 1;
                if (control_es) {
                    control_pre_view = control_es;
                }

                if( control_data.attr("data-slider-center") === 'true' ){
                    control_slide_center = true;
                } else {
                    control_slide_center = false;
                }

                if( control_data.attr("data-slider-loop") === 'true' ){
                    control_slide_loop = true;
                } else {
                    control_slide_loop = false;
                }

                let control_swiper = new Swiper(control_data[0], {
                    slidesPerView: control_pre_view,
                    direction: control_direction,
                    allowTouchMove: true,
                    loop: control_slide_loop,
                    centeredSlides: control_slide_center,
                    watchSlidesProgress: true,
                    pagination: {
                        el: "." + control_pagination,
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '"></span>';
                        },
                    },
                    navigation: {
                        nextEl: control_navigation_prev,
                        prevEl: control_navigation_next,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: control_pre_view,
                            spaceBetween: control_gap_md,
                        },
                        575: {
                            slidesPerView: control_sm,
                            spaceBetween: control_gap_md,
                        },
                        768: {
                            slidesPerView: control_md,
                            spaceBetween: control_gap_xl,
                        },
                        992: {
                            slidesPerView: control_lg,
                            spaceBetween: control_gap_xl,
                        },
                        1200: {
                            slidesPerView: control_xl,
                            spaceBetween: control_gap_xl,
                        },
                    },
                });

                let view_data = $(this).find('.view-swiper-slider');
                let view_navigation_prev = view_data.find( '.swiper-button-prev' )[0];
                let view_navigation_next = view_data.find( '.swiper-button-next' )[0];
                let view_pagination = $(this).attr("data-pagination");
                let view_direction = view_data.attr("data-direction");
                let view_effect = view_data.attr("data-effect");
                let view_slide_center = '';
                let view_slide_loop = '';
                let view_gap_xl = parseInt(view_data.attr("data-gap-xl"));
                let view_gap_md = parseInt(view_data.attr("data-gap-md"));
                let view_xl = parseInt(view_data.attr("data-xl"));
                let view_lg = parseInt(view_data.attr("data-lg"));
                let view_md = parseInt(view_data.attr("data-md"));
                let view_sm = parseInt(view_data.attr("data-sm"));
                let view_es = parseInt(view_data.attr("data-es"));
                let view_pre_view = 1;
                if (view_es) {
                    view_pre_view = view_es;
                }

                if( view_data.attr("data-slider-center") === 'true' ){
                    view_slide_center = true;
                } else {
                    view_slide_center = false;
                }

                if( view_data.attr("data-slider-loop") === 'true' ){
                    view_slide_loop = true;
                } else {
                    view_slide_loop = false;
                }

                var setting = {
                    slidesPerView: view_pre_view,
                    direction: view_direction,
                    allowTouchMove: true,
                    loop: view_slide_loop,
                    centeredSlides: view_slide_center,
                    pagination: {
                        el: "." + view_pagination,
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '"></span>';
                        },
                    },
                    thumbs: {
                        swiper: control_swiper,
                    },
                    navigation: {
                        nextEl: view_navigation_next,
                        prevEl: view_navigation_prev,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: view_pre_view,
                            spaceBetween: view_gap_md,
                        },
                        575: {
                            slidesPerView: view_sm,
                            spaceBetween: view_gap_md,
                        },
                        768: {
                            slidesPerView: view_md,
                            spaceBetween: view_gap_xl,
                        },
                        992: {
                            slidesPerView: view_lg,
                            spaceBetween: view_gap_xl,
                        },
                        1200: {
                            slidesPerView: view_xl,
                            spaceBetween: view_gap_xl,
                        },
                    }
                };

                if( view_effect ){
                    setting.effect = view_effect;
                }

                let view_swiper = new Swiper(view_data[0], setting);
            });
        },

        tabs: function() {
            $(".tab-wrap").each(function () {
                let nav = $(this).find(".tab-nav");
                let tab_content = $(this).find(".tab-content");
                $(this).on("click touchstart", ".tab-nav", function (e) {
                    e.preventDefault();
                    let activeTab = $(this).attr("href");
                    nav.not(this).removeClass("is-active");
                    $(this).addClass("is-active");
                    tab_content.removeClass("is-active");
                    $(activeTab).addClass("is-active");
                });
            });
        },

        modern_tabs: function() {
            $(".block-modern-tab").each(function () {
                let nav = $(this).find(".tab-nav");
                let tab_content = $(this).find(".tab-content");
                $(this).on("click touchstart", ".tab-nav", function (e) {
                    e.preventDefault();
                    let activeTab = $(this).attr("href");
                    nav.not(this).removeClass("is-active");
                    $(this).addClass("is-active");
                    tab_content.removeClass("is-active");
                    $(activeTab).addClass("is-active");
                });
            });
        },

        accordion: function() {
            $( '.block-accordion.enable' ).each( function() {
                if( $( this ).hasClass( 'active-first' ) ){
                    $(".accordion-item").first().addClass( 'is-active' );
                    $(".accordion-item").first().find( '.content' ).slideDown();
                }
                $(".accordion-item").on( 'click', '.title', function (e) {
                    e.preventDefault();
                    $(".accordion-item .title").not( this ).closest( '.accordion-item' ).removeClass( 'is-active' );
                    $(".accordion-item .title").not( this ).next().slideUp();
                    $( this ).closest( '.accordion-item' ).toggleClass( 'is-active' );
                    $( this ).next().slideToggle();
                });
            });
        },

        scroll_top: function() {
            $(".backtotop").each(function () {
                let $scrollUp = $(this);
                let lastScrollTop = 0;
                $(window).on("scroll", function () {
                    let st = $(this).scrollTop();
                    if (st > lastScrollTop) {
                        $scrollUp.removeClass("show");
                    } else {
                        if ($(window).scrollTop() > 200) {
                            $scrollUp.addClass("show");
                        } else {
                            $scrollUp.removeClass("show");
                        }
                    }
                    lastScrollTop = st;
                });
    
                $scrollUp.on("click", function (evt) {
                    $("html, body").animate({ scrollTop: 0 }, 600);
                    evt.preventDefault();
                });
            });
        },

        header: function() {
            if( $( '.site-header' ).hasClass( 'is-sticky' ) ){
                let $scrollUp = $( '.site-header.is-sticky' );
                let lastScrollTop = 0;
                $(window).on("scroll", function () {
                    let st = $(this).scrollTop();
                    if (st > lastScrollTop) {
                        $scrollUp.removeClass("on-scroll");
                    } else {
                        if ($(window).scrollTop() > 0) {
                            $scrollUp.addClass("on-scroll");
                        } else {
                            $scrollUp.removeClass("on-scroll");
                        }
                    }
                    lastScrollTop = st;
                });
            }
        },

        main_menu: function() {

            // =============== Check Menu Outside =============== //
            if( $(".is-normal-menu").length > 0  && $( window ).width() > 991 ){
                let normal_menu = $(".is-normal-menu");
                let sub_menu = normal_menu.find(".sub-menu");
                let outside = '';
                if( sub_menu.length > 0 ){
                    for (let index = 0; index < sub_menu.length; index++) {
                        const element = sub_menu[index];
                        let bounding = element.getBoundingClientRect();
                        if (bounding.right > (window.innerWidth || document.documentElement.clientWidth)) {
                            outside = 'left';
                        }
                        if (bounding.left < 0) {
                            outside = 'right';
                        }
                    }
                }
                normal_menu.addClass(outside);
            }

            // =============== Check Has Submenu =============== //
            if( $(".sub-menu").length > 0 ){
                $(".sub-menu").each( function() {
                    $( this ).closest( 'li' ).addClass( 'has-sub-menu' );
                    $( this ).closest( '.mega-menu-item' ).addClass( 'has-sub-menu' );
                    if( $( 'body' ).attr('dir') === 'rtl' ){
                        $( this ).closest( 'li' ).find( '> a' ).prepend( '<span class="toggle-sub-menu"></span>' );
                    } else {
                        $( this ).closest( 'li' ).find( '> a' ).append( '<span class="toggle-sub-menu"></span>' );
                    }
                });
            }

            if( ($(".mega-menu-item").length > 0 && $( window ).width() <= 992) || $(".mega-menu-item").length > 0 && $( '.site-header' ).hasClass( 'layout-02' ) ){
                $(".mega-menu-item").each( function() {
                    if( $( this ).find( 'ul' ).length > 0 ){
                        if( $( 'body' ).attr('dir') === 'rtl' ){
                            $( this ).find( '.mega-head' ).prepend( '<span class="toggle-sub-menu"></span>' );
                        } else {
                            $( this ).find( '.mega-head' ).append( '<span class="toggle-sub-menu"></span>' );
                        }
                    }
                });
            }

            // =============== Canvas Menu =============== //
            if( $( window ).width() <= 992 || $( '.site-header' ).hasClass( 'layout-02' ) ){
                let transform = 0,
                    index = 0;
                $( '.toggle-sub-menu' ).on( 'click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    index++;
                    $( this ).closest( '.has-sub-menu' ).find( '> .sub-menu' ).addClass( 'open' );
                    $( this ).closest( '.main-menu' ).find( '.menu-back' ).fadeIn();
                    let main_menu = $( this ).closest( '.main-menu' ).find( '> ul' );
                    if( main_menu.attr( 'data-transform' ) ){
                        transform = main_menu.attr( 'data-transform' );
                        transform = parseInt(transform) - 100;
                    } else {
                        transform = transform - 100;
                    }
                    main_menu.css( 'transform', 'translateX(' + transform + '%)' ); 
                    main_menu.attr( 'data-transform', transform ); 
                });

                $( '.menu-back' ).on( 'click', function(e) {
                    e.preventDefault();
                    if( $( this ).closest( '.main-menu' ).find( '.sub-menu' ).find( '.sub-menu' ).hasClass( 'open' ) ){
                        $( this ).closest( '.main-menu' ).find( '.sub-menu' ).find( '.sub-menu' ).removeClass( 'open' );
                    } else if( $( this ).closest( '.main-menu' ).find( '.sub-menu' ).hasClass( 'open' ) ){
                        $( this ).closest( '.main-menu' ).find( '.sub-menu' ).removeClass( 'open' );
                    }
                    let main_menu = $( this ).closest( '.main-menu' ).find( '> ul' );
                    let transform = main_menu.attr( 'data-transform' );
                    transform = parseInt(transform) + 100;
                    main_menu.css( 'transform', 'translateX(' + transform + '%)' ); 
                    main_menu.attr( 'data-transform', transform ); 
                    if( transform == 0 ){
                        $( this ).fadeOut();
                    }
                });

                $( '.canvas-menu' ).on( 'click', '.icon', function(e) {
                    $( this ).closest( 'body' ).find( '.main-menu' ).addClass( 'is-active' );
                });

                $( '.menu-close' ).on( 'click', function(e) {
                    $( this ).closest( '.main-menu' ).removeClass( 'is-active' );
                });
            }
        },

        dark_light_switcher: function() {
            $( '.dl-switcher' ).on( 'click', function(e) {
				e.preventDefault();
				var _this 	    = $( this ),
					body 	    = $( 'body' ),
					toddler 	= _this.find( '.toddler' );

                if( _this.hasClass( 'sala-dark-scheme' ) ){
                    var text = $( this ).find( '.light' ).attr( 'data-text' );
                    toddler.text(text);
                } else {
                    var text = $( this ).find( '.dark' ).attr( 'data-text' );
                    toddler.text(text);
                }

				_this.toggleClass( 'sala-dark-scheme' );
				body.toggleClass( 'sala-dark-scheme' );
			});
        },

        portfolio_isotope: function() {
            $(".portfolio-isotope").each(function () {
                var _this = $(this),
                    grid = _this.find(".grid"),
                    button = _this.find("button"),
                    filterValue = '',
                    layoutMode = '';

                if( grid.hasClass( 'masonry' ) ){
                    layoutMode = 'masonry';
                } else {
                    layoutMode = 'fitRows';
                }

                grid.imagesLoaded( function() {
                    var $grid = grid.isotope({
                        itemSelector: ".portfolio-item",
                        percentPosition: true,
                        gutter: 0,
                        layoutMode: layoutMode,
                        masonry: {
                            columnWidth: ".grid-sizer",
                        },
                    });

                    var i = 1;
                    
                    button.on("click", function () {
                        var currentValue = $( 'button.is-active' ).attr("data-filter");
                        filterValue = $(this).attr("data-filter");
                        button.not(this).removeClass("is-active");
                        $(this).addClass("is-active");
                        $grid.isotope({ filter: filterValue });
                        if( grid.hasClass( 'metro' ) || grid.hasClass( 'mosaic' ) ){
                            if( currentValue != filterValue ){
                                i = 1;
                            }
                            if( i == 1 ){
                                setTimeout( function() {
                                    $( 'button.is-active' ).click();
                                }, 1000);
                            }
                            i++;
                        }
                    });
                    
                    if( grid.hasClass( 'metro' ) ){
                        $grid.on( 'arrangeComplete', function() {
                            $( '.portfolio-item' ).removeAttr( 'data-index' );
                            $( '.portfolio-item' ).removeClass( 'is-active' );
                            $( '.portfolio-item:not([style*="display: none"])' ).each( function(index) {
                                if( $( this ).is(":visible") ){
                                    $( this ).attr( 'data-index', index + 1 );
                                    $( this ).addClass( 'is-active' );
                                }
                            });
                        });
                    }

                    setTimeout( function() {
                        if( $(window).width() > 767 && grid.hasClass( 'mosaic' ) ){
                            $( '.portfolio-item:nth-child(4n+2)' ).each( function() {
                                var _this 		= $( this ),
                                    cur_height 	= 0,
                                    height 		= 0,
                                    marginTop 	= 0;
        
                                cur_height = _this.height();
                                height = _this.next().height();
        
                                if( height > cur_height ){
                                    marginTop = (height - cur_height) / 2;
                                    _this.css( 'margin-top', marginTop + 'px' );
                                } else if( cur_height > height ){
                                    marginTop = (cur_height - height) / 2;
                                    _this.next().css( 'margin-top', marginTop + 'px' );
                                }
                            });
                            $( '.portfolio-item:nth-child(4n+1)' ).each( function() {
                                var _this 		= $( this ),
                                    cur_height 	= 0,
                                    height 		= 0,
                                    marginTop 	= 0;
        
                                cur_height = _this.height();
                                height = _this.prev().height();
        
                                if( height > cur_height ){
                                    marginTop = (height - cur_height) / 2;
                                    _this.css( 'margin-top', marginTop + 'px' );
                                } else if( cur_height > height ){
                                    marginTop = (cur_height - height) / 2;
                                    _this.prev().css( 'margin-top', marginTop + 'px' );
                                }
                            });
                            $grid.on( 'arrangeComplete', function(event, filteredItems) {
                                $( '.portfolio-item' ).removeAttr( 'data-index' );
                                $( '.portfolio-item' ).removeClass( 'is-active' );
                                $( '.portfolio-item' ).removeClass('nextodd');
                                $( '.portfolio-item' ).removeClass('preveven');
                                $( '.portfolio-item' ).css( 'margin-top', '0px' );
                                var j = 0;
                                $( '.portfolio-item:not([style*="display: none"])' ).each( function(index) {
                                    if( $( this ).is(":visible") ){
                                        j++;
                                        if (j % 4 === 1) {
                                            $( this ).attr( 'data-index', 'odd' );
                                        }
                                        if (j % 4 === 0) {
                                            $( this ).attr( 'data-index', 'even' );
                                        }
                                        $( this ).addClass( 'is-active' );
                                    }
                                });
                                $( '.portfolio-item[data-index="odd"]' ).each( function() {
                                    var _this 		= $( this ),
                                        cur_height 	= 0,
                                        height 		= 0,
                                        marginTop 	= 0,
                                        nextodd 	= '';
            
                                    cur_height = _this.height();
                                    
                                    nextodd = _this.nextAll( '.portfolio-item.is-active' ).first().addClass('nextodd');
                                    height = nextodd.height();
                                    
                                    if( height > cur_height ){
                                        marginTop = (height - cur_height) / 2;
                                        _this.css( 'margin-top', marginTop + 'px' );
                                        _this.nextAll( '.portfolio-item.is-active' ).first().css( 'margin-top', '0px' );
                                    } else if( cur_height > height ){
                                        marginTop = (cur_height - height) / 2;
                                        _this.css( 'margin-top', '0px' );
                                        _this.nextAll( '.portfolio-item.is-active' ).first().css( 'margin-top', marginTop + 'px' );
                                    }
                                });
                                $( '.portfolio-item[data-index="even"]' ).each( function() {
                                    var _this 		= $( this ),
                                        cur_height 	= 0,
                                        height 		= 0,
                                        marginTop 	= 0,
                                        preveven 	= '';
            
                                    cur_height = _this.height();
                                    preveven = _this.prevAll( '.portfolio-item.is-active' ).first().addClass('preveven');
                                    height = preveven.height();

                                    if( height > cur_height ){
                                        marginTop = (height - cur_height) / 2;
                                        _this.css( 'margin-top', marginTop + 'px' );
                                        _this.prevAll( '.portfolio-item.is-active' ).first().css( 'margin-top', '0px' );
                                    } else if( cur_height > height ){
                                        marginTop = (cur_height - height) / 2;
                                        _this.css( 'margin-top', '0px' );
                                        _this.prevAll( '.portfolio-item.is-active' ).first().css( 'margin-top', marginTop + 'px' );
                                    }
                                });
                            });
                        }
                    }, 500);
                });
            });
        },

        nice_select: function() {
            if(typeof $('select').niceSelect === "function"){
                $('select').niceSelect();
            }
        },

        nouislider: function() {
            if(typeof noUiSlider != 'undefined'){
                var range_price = $( '#range-price' )[0];
                var input_price_min = $( 'input[name="price_min"]' );
                var input_price_max = $( 'input[name="price_max"]' );
                var price_min = $( '.price-min span' );
                var price_max = $( '.price-max span' );
                noUiSlider.create(range_price, {
                    start: [10, 130],
                    connect: true,
                    range: {
                        'min': 10,
                        'max': 200
                    }
                });
                range_price.noUiSlider.on('update', function (values, handle) {
                    price_min.text(values[0]);
                    price_max.text(values[1]);
                    input_price_min.val(values[0]);
                    input_price_max.val(values[1]);
                });
            }
        },

        zoom_image: function() {
            if(typeof $('.zoom').zoom === "function"){
                $('.zoom').zoom();
            }
        },

        input_number: function() {
            $( '.quantity' ).each( function() {
                var spinner = $(this),
                    input = spinner.find('input[type="number"]'),
                    btnUp = spinner.find('.quantity-up'),
                    btnDown = spinner.find('.quantity-down'),
                    min = input.attr('min'),
                    max = input.attr('max');
        
                btnUp.on( 'click', function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue >= max) {
                    var newVal = oldValue;
                    } else {
                    var newVal = oldValue + 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });
        
                btnDown.on( 'click', function() {
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
        },

        reviews: function() {
            $( '.stars a' ).on( 'click', function(e) {
                e.preventDefault();
                $( this ).closest( '.stars' ).addClass( 'is-active' );
                $( '.stars a' ).not( this ).removeClass( 'is-active' );
                $( this ).addClass( 'is-active' );
                $( 'input[name="rating"]' ).val( $( '.stars a' ).index(this) + 1 );
            });
        },

        checkout: function() {
            $( '.show-form-coupon' ).on( 'click', function(e) {
                e.preventDefault();
                $( '.checkout-coupon' ).slideToggle();
            });
        },

        section_pricing: function() {
            $( '.section-pricing' ).each( function() {
                $( this ).on( 'click', '.switch', function(e) {
                    e.preventDefault();
                    $( this ).toggleClass( 'is-active' );
                    $( '.pricing-table' ).each( function() {
                        if( $( this ).hasClass( 'is-active' ) ){
                            $( this ).removeClass( 'is-active' );
                        } else {
                            $( this ).addClass( 'is-active' );
                        }
                    });
                });
            });
        },

        section_table: function() {
            var i = 0;
            $( '.section-table table tbody tr' ).each( function() {
                if( $( this ).find( 'td.colspan-full' ).length > 0 ){
                    i = 0;
                } else {
                    i++;
                    if (i % 2 === 0) {
                        $( this ).addClass( 'even' );
                    } else {
                        $( this ).addClass( 'odd' );
                    }
                }
            });
        },

        section_counter: function() {
            $( '.counter' ).each( function() {
                $( this ).counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        },

        form: function() {
            $( '.field-password' ).each( function() {
                $( this ).on( 'click', '.view-password', function() {
                    var input = $( this ).closest( '.field-password' ).find( 'input' );
                    if (input.attr('type') === 'text') {
                        input.attr('type', 'password');
                    } else {
                        input.attr('type', 'text');
                    }
                }); 
            });
        },

        row: function() {
            $( '.row-full' ).each( function() {
                var window_w = $( window ).width();
                var _this = $( this );
                if( window_w > 992 ){
                    var container_w = 0;
                    var col_left = $( this ).find('.col-full-left');
                    var col_right = $( this ).find('.col-full-right');
                    var padding_right = col_right.css( 'padding-right' );
    
                    if( $( this ).closest( '.container' ) ){
                        container_w = $( this ).closest( '.container' ).width();
                    } else if( $( this ).closest( '.container-fluid' ) ){
                        container_w = $( this ).closest( '.container-fluid' ).width();
                    }
    
                    var size = (window_w - container_w) / 2;
    
                    if( col_left.length > 0 ){
                        col_left.css( 'margin-left', (size * -1) + 'px' );
                        var size_left = col_left.outerWidth() + size;
                        col_left.css( 'width', 'calc(' + size_left + 'px )' );
                        col_left.css( 'max-width', 'calc(' + size_left + 'px )' );
                    }
    
                    if( col_right.length > 0 ){
                        var size_right = col_right.outerWidth() + size;
                        col_right.css( 'width', 'calc(' + size_right + 'px )' );
                        col_right.css( 'max-width', 'calc(' + size_right + 'px )' );
                    }
                }
            });
        },

        circle_progress: function() {
            $( '.circle-progress' ).each( function() {
                $( this ).circleProgress({
                    startAngle: - Math.PI / 4 * 2,
                });
            });
        },

        timeline: function() {
            $( '.block-timeline.layout-02' ).each( function() {
                var _this = $( this );
                var _item = _this.find( '.item' );
                var _date = _this.find( '.date-line' );
                var _date_click = _this.find( '.date-line a' );
                _date.on( 'click', 'a', function(e) {
                    e.preventDefault();
                    var id = $(this).index();
                    _item.removeClass( 'is-active' );
                    _item.eq(id).addClass( 'is-active' );
                    _date_click.not( this ).removeClass( 'is-active' );
                    $( this ).addClass( 'is-active' );
                });
            });
        },

        elasticstack: function() {
            $( '.block-elasticstack' ).each( function() {
                var dragback = $( this ).attr( 'data-dragback' );
                var dragmax = $( this ).attr( 'data-dragmax' );
                var item = $( this ).find( '.item' );
                var elasticstack = $( this ).find( '.elasticstack' )[0];

                var maxHeight = Math.max.apply(null, item.map(function () {
                    return $(this).height();
                }).get());

                item.css( 'height', maxHeight + 'px' );

                var elasticstackheight = maxHeight + 100;

                $( this ).find( '.elasticstack' ).css( 'height', elasticstackheight + 'px' );

                new ElastiStack( elasticstack, {
                    // distDragBack: if the user stops dragging the image in a area that does not exceed [distDragBack]px
                    // for either x or y then the image goes back to the stack
                    distDragBack : dragback,
                    // distDragMax: if the user drags the image in a area that exceeds [distDragMax]px
                    // for either x or y then the image moves away from the stack
                    distDragMax : dragmax,
                    // callback
                    onUpdateStack : function( current ) { return false; }
                } );
            });
        },

        infinite: function() {
            $.fn.ux_multiply = function (numCopies) {
                var newElements = this.clone();
                for (var i = 1; i < numCopies; i++) {
                    newElements = newElements.add(this.clone());
                }
                return newElements;
            };
            $(".block-infinite .infinite").each(function () {
                var listWidth = 0;
    
                var item = $(this).find(".item");
    
                if (item.length > 0) {
                    item.each(function () {
                        listWidth += $(this).innerWidth();
                    });
    
                    var mult = $(this).innerWidth() / listWidth;

                    if( $(this).hasClass( 'layout-02' ) ){

                        $(this).prepend('<div class="item-dup"></div>');
    
                        if (mult > 0.5) {
                            $(this)
                                .find(".item-dup")
                                .prepend(item.ux_multiply(Math.ceil(mult)));
                        } else {
                            $(this).find(".item-dup").prepend(item.ux_multiply(1));
                        }
                    } else {
                        $(this).append('<div class="item-dup"></div>');
        
                        if (mult > 0.5) {
                            $(this)
                                .find(".item-dup")
                                .append(item.ux_multiply(Math.ceil(mult)));
                        } else {
                            $(this).find(".item-dup").append(item.ux_multiply(1));
                        }
                    }
    
                    $(this).css("width", listWidth);
    
                    var itemcount = $(this).find(".item").length;
                    var itemsize = listWidth / itemcount;
    
                    var speed = $(this).data("speed");
                    var duration = itemsize * 10;
    
                    if (speed === 200) {
                        duration = 10;
                    } else if (speed == 0) {
                        duration = 0;
                    } else if (speed > 100) {
                        speed = speed - 100;
                        speed = (speed / 10) * itemsize;
                        duration = duration - speed;
                    } else if (speed < 100) {
                        speed = 100 - speed;
                        speed = (speed / 10) * (itemsize * 8);
                        duration = duration + speed;
                    }
    
                    var speed = (itemcount * duration) / 1000;
                    $(this).css("animation-duration", speed + "s");
                }
            });
        },

        countdown: function() {
            function addzeros(number) {
                if( isNaN(number) ){
                    return number;
                }
                if (number < 10) {
                    number = '0' + number;
                }
                return number;
            }            
            $( '.block-countdown' ).each( function() {
                var time = $( this ).attr( 'data-time' );
                var expired_text = $( this ).attr( 'data-expired-text' );
                var e_days = $( this ).find( '.days .number' );
                var e_hours = $( this ).find( '.hours .number' );
                var e_minutes = $( this ).find( '.minutes .number' );
                var e_seconds = $( this ).find( '.seconds .number' );
                var countDownDate = new Date(time).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element
                e_days.text(addzeros(days));
                e_hours.text(addzeros(hours));
                e_minutes.text(addzeros(minutes));
                e_seconds.text(addzeros(seconds));

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    $( '.block-countdown > *' ).remove();
                    $( '.block-countdown' ).text(expired_text);
                }
                }, 1000);
            });
        }
    }

    SALA.onReady = {
        init: function() {
            SALA.element.init();
        }
    };

    SALA.onLoad = {
        init: function() {
            SALA.element.windowLoad();
            $('.preload').remove();
            $( '.twentytwenty-wrap' ).each( function() {
                $(this).find('.twentytwenty-container').css( 'height', '386px' );
                $(this).twentytwenty();
            });
        }
    };

    SALA.onScroll = {
        init: function() {
            SALA.element.windowScroll();
        }
    };

    $( document ).on('ready', SALA.onReady.init );
    $( window ).on('scroll', SALA.onScroll.init );
    $( window ).on('load', SALA.onLoad.init );
})(jQuery);

if( typeof WOW == 'function' ){
    var wow = new WOW(
        {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animate__animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
        }
    );
    wow.init();
}