var studiareTheme;

(function($) {
    'use strict';

    studiareTheme = (function() {

        var body = $('body');

        return {

            init: function() {
                this.studiare_preloader();
                this.header_search();
                this.dropdwon_arrow();
                this.back_to_top();
                this.off_canvas_navigation();
                this.modal_login_form();
                this.select_to_select2();
                this.courses_layout_switch();
                this.header_mini_cart();
                this.sticky_sidebar();
                this.video_popup();
                this.portfolioFilter();
                this.animatedCounter();
                this.courseCategories();
                this.blogMasonry();
                this.testimonialsCarousel();
                this.coursePanel();
                this.countDownTimer();
                this.galleryLightbox();
                this.galleryCarousel();
            },

            /**
             * Preloader Page
             */
            studiare_preloader: function() {
                var $preload = $('.studiare-preloader');
                var is_user = false;
                if ($('body').hasClass('logged-in')) {
                    is_user = true;
                }

                if (is_user || (top === self)) {
                    // if logined and not in a iframe.
                    if ($preload.length > 0) {
                        $preload.fadeOut(600, function () {
                            $preload.remove();
                        });
                    }
                }
            },

            /**
             * Header Search
             */
            header_search: function() {
                var searchInput = $('.site-header .search-input'),
                    searchOpener = $('.top-bar-search .search-form-opener'),
                    searchOpenerIcon = searchOpener.find('i');

                $(document).on("click", ".search-form-opener, .search-capture-click", function (ev) {
                    ev.preventDefault();

                    if ( body.hasClass('search-active') ) {

                        body.removeClass('search-active');


                    } else {

                        body.addClass('search-active');
                        setTimeout(function(){searchInput.focus();}, 700);
                    }

                });

            },

            /**
             * Main Navigation DropDown Ancestor
             */
            dropdwon_arrow: function () {
                $('.studiare-navigation > ul > li.menu-item-has-children').each(function(){
                    $(this).find('> a').append('<i class="fa fa-angle-down"></i>');
                });
            },

            /**
             * Back to top
             */
            back_to_top: function() {
                var back_to_top = $('#back-to-top');

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        back_to_top.addClass('visible');
                    } else {
                        back_to_top.removeClass('visible');
                    }
                });

                back_to_top.on('click', function (ev) {
                    ev.preventDefault();

                    $('html,body').animate({scrollTop: '0px'}, 800);
                })
            },

            /**
             * Off Canvas Navigation
             */
            off_canvas_navigation: function() {

                $('.mobile-nav-toggle').on('click', function(ev) {
                    ev.preventDefault();

                    body.toggleClass('off-canvas-open');
                });

                $('.off-canvas-overlay').on('click', function(ev) {
                    ev.preventDefault();

                    body.removeClass('off-canvas-open');
                });

            },

            /**
             * Login Form Modal
             */
            modal_login_form: function () {

                $('.register-modal-opener').on('click', function (e) {
                    e.preventDefault();
                    body.toggleClass('modal-login-open');
                });

                $('.login-form-overlay, .login-form-modal-box .close').on('click', function (e) {
                    e.preventDefault();
                    body.removeClass('modal-login-open')
                });

            },

            /**
             * Transform Select to Select2
             */
            select_to_select2: function () {
              $('select').select2({
                  width: '100%',
              })
            },

            /**
             * Courses Layout Swtich
             */
            courses_layout_switch: function () {
                var grid_class = 'grid-view',
                    list_class = 'list-view';

                var listSwitcher = function () {
                    var switcher_active = 'active';

                    $('.switcher-view-grid').on('click', function (ev) {
                        switchToGrid();
                        ev.preventDefault();
                    });

                    $('.switcher-view-list').on('click', function (ev) {
                        switchToList();
                        ev.preventDefault();
                    });

                    function switchToList() {
                        $('.switcher-view-list').addClass(switcher_active);
                        $('.switcher-view-grid').removeClass(switcher_active);
                        $('.products').fadeOut(300, function () {
                            $(this).removeClass(grid_class).addClass(list_class).fadeIn(300);
                        });
                    }

                    function switchToGrid() {
                        $('.switcher-view-grid').addClass(switcher_active);
                        $('.switcher-view-list').removeClass(switcher_active);
                        $('.products').fadeOut(300, function () {
                            $(this).removeClass(list_class).addClass(grid_class).fadeIn(300);
                        });
                    }

                };

                listSwitcher();

            },

            /**
             * Header Mini Cart
             */
            header_mini_cart: function () {
              var miniCartOpener = $('.mini-cart-opener');

              miniCartOpener.on('click', function (ev) {

                  ev.preventDefault();

                  $('.dropdown-cart').toggleClass('visible');

                  if($('.dropdown-cart').hasClass('visible'))
                  {
                      setTimeout(function()
                      {
                          $(document).on('click', closeMiniCartClickOutSide);
                      }, 1);
                  }
                  else
                  {
                      $(document).off('click', closeMiniCartClickOutSide);
                  }
              });

              var closeMiniCartClickOutSide = function (ev) {
                  if( ! $(ev.target).closest($('.dropdown-cart')).length) {
                      $('.dropdown-cart').removeClass('visible');
                      $(document).off('click', closeMiniCartClickOutSide);
                  }
              }

            },

            /**
             * Sticky Sidebar
             */
            sticky_sidebar: function () {

                var offsetTop = 30;

                if ($("#wpadminbar").length) {
                    offsetTop += $("#wpadminbar").outerHeight();
                }

                if ($('.sticky-sidebar').length > 0) {
                    $(".sticky-sidebar").theiaStickySidebar({
                        "containerSelector"     : "",
                        "additionalMarginTop"   : offsetTop,
                        "additionalMarginBottom": "0",
                        "updateSidebarHeight"   : false,
                        "minWidth"              : "768",
                        "sidebarBehavior"       : "modern"
                    });
                }

            },

            /**
             * Video Button with Magnific Popup
             */
            video_popup: function () {
                $(".cdb-video-icon, .video-lesson-preview").magnificPopup({
                    type: 'iframe',
                });
            },

            /**
             * Portfolio Filter
             */
            portfolioFilter: function () {

                $('.portfolio-controls .control').on('click', function (ev) {
                   ev.preventDefault();
                });

                if ( $('.portfolio-holder').length ) {
                    var mixer = mixitup('.portfolio-holder', {
                        selectors: {
                            "target": '.portfolio-entry'
                        },
                        animation: {
                            "duration": 250,
                            "nudge": true,
                            "reverseOut": false,
                            "effects": "fade stagger(100ms)"
                        }
                    });
                }
            },

            /**
             * Animated Counter
             */
            animatedCounter: function () {

                var counters = $('.counter-number');

                if (counters.length) {
                    counters.each(function () {
                        var counter = $(this);
                        counter.appear(function () {
                            counter.parent().css({'opacity': 1});

                            //Counter zero type
                            var max = parseFloat(counter.text());
                            counter.countTo({
                                from: 0,
                                to: max,
                                speed: 1500,
                                refreshInterval: 100
                            });

                        }, {accX: 0, accY: 0});
                    });
                }
            },

            /**
             * Course Categories
             */
            courseCategories: function () {

                var $course_grid = $('.course-categories').packery({originLeft: false}); //add by suncode {originLeft: false}

                $course_grid.imagesLoaded().progress( function() {
                    $course_grid.packery({originLeft: false});
					
                });
				
				
            },

            /**
             * Blog Masonry
             */
            blogMasonry: function () {
                var $post_items = $('.blog-masonry').packery({originLeft: false});

                $post_items.imagesLoaded().progress( function() {
                    $post_items.packery({originLeft: false});
                });
            },

            /**
             * Testimonials Carousel
             */
            testimonialsCarousel: function () {
                var carousel = $('.testimonials-wrapper .owl-carousel');

                if ( carousel.length ) {

                    carousel.each( function () {

                        var owl = $(this),
                            pagination = owl.data('pagination') ? owl.data('pagination') : false,
                            loop = owl.data('loop');

                        owl.owlCarousel({
                            items: 1,
                            dots: pagination,
                            nav: false,
                            autoheight: true,
                            navText: false,
                            loop: loop,

                            onRefreshed: function() {
                                $(window).resize();
                            }
                        });

                    });
                }
            },

            /**
             * Course Panel Toggle
             */
            coursePanel: function () {
                var acc = document.getElementsByClassName("course-panel-heading");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight){
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            },

            /**
             * Count Down Timer
             */
            countDownTimer: function () {
                $('.countdown-item').each(function(){
                    $(this).countdown($(this).data('date'), function(event) {
                        $(this).html(event.strftime(''
                            + '<div class="countdown-col"><span class="countdown-unit countdown-days"><span class="number">%-D </span><span class="text">' + studiare_options.countdown_days + '</span></span></div> '
                            + '<div class="countdown-col"><span class="countdown-unit countdown-hours"><span class="number">%H </span><span class="text">' + studiare_options.countdown_hours + '</span></span></div> '
                            + '<div class="countdown-col"><span class="countdown-unit countdown-min"><span class="number">%M </span><span class="text">' + studiare_options.countdown_mins + '</span></span></div> '
                            + '<div class="countdown-col"><span class="countdown-unit countdown-sec"><span class="number">%S </span><span class="text">' + studiare_options.countdown_sec + '</span></span></div>'));
                    });
                })
            },

            /**
             * Gallery LightBox
             */
            galleryLightbox: function () {
                var galleryWrapper = $('.gallery-wrapper');

                galleryWrapper.each( function () {
                    var _this = $(this);

                    _this.magnificPopup({
                        mainClass: 'mfp-zoom-in',
                        type: 'image',
                        delegate: 'a.gallery-lightbox-link',
                        removalDelay: 400,
                        gallery: {
                            enabled:true
                        }
                    });
                });
            },

            /**
             * Gallery Carousel
             */
            galleryCarousel: function () {
                var carousel = $('.gallery-wrapper .owl-carousel');

                if ( carousel.length ) {

                    carousel.each( function() {
                        var owl = $(this),
                            autoplay = true,
                            pagination = owl.data('pagination') ? owl.data('pagination') : false,
                            navigation = owl.data('navigation') ? owl.data('navigation') : false,
                            loop = owl.data('loop');

                        owl.owlCarousel({
                            items: 1,
                            dots: pagination,
                            nav: navigation,
                            autoplay: autoplay,
                            autoheight: true,
                            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                            loop: loop,

                            onRefreshed: function() {
                                $(window).resize();
                            }
                        });
                    });

                }

            },

        }
    }());

})(jQuery);

jQuery(document).ready(function() {

    studiareTheme.init();

});


/* convert dropdown to radio button variation product */
jQuery(document).on('change', '.variation-radios input', function() {
  jQuery('select[name="'+jQuery(this).attr('name')+'"]').val(jQuery(this).val()).trigger('change');
});
jQuery(document).on('woocommerce_update_variation_values', function() {
  jQuery('.variation-radios input').each(function(index, element) {
    jQuery(element).removeAttr('disabled');
    var thisName = jQuery(element).attr('name');
    var thisVal  = jQuery(element).attr('value');
    if(jQuery('select[name="'+thisName+'"] option[value="'+thisVal+'"]').is(':disabled')) {
      jQuery(element).prop('disabled', true);
    }
  });
});


/* set cookie to show notifbar */
function studi_setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function studi_getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

jQuery(document).ready(function($){
   var show_top_notif_cookie = studi_getCookie("show_top_notif");
   jQuery(".notibar_closer").click(function(){
       if (show_top_notif_cookie != 1) {
    //show popup here
    
       studi_setCookie("show_top_notif",1,7);
   }
   });
   
   });
 
 
 