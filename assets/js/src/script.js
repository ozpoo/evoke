(function ($, root, undefined) {

	$(function () {

		$(document).ready(function() {

		});

		$(window).load(function() {
			init();
			animate();
		});


		$(window).resize(function() {
			resize();
		});

		var init = function() {
			document.addEventListener("touchstart", function() {}, true);
			$lastScrollTop = $scrollTop = $(document).scrollTop();
			$current = "show";
			var elements = $('.sticky');
			Stickyfill.add(elements);
			setScroll();
			addBlacklist();
			setSmoothState();
			setBackground($("#site-content-wrap"));
			setFlky();
			setListeners();
			setVideos();
			resize();
			AOS.init();
			reveal();
			$(".intro").removeClass("show");
		};

		var setSmoothState = function() {
			$options = {
				prefetch: true,
				scroll: false,
				cacheLength: 0,
				repeatDelay: 500,
				loadingClass: 'is-loading',
        anchors: 'a',
				blacklist: '.wp-link',
				onBefore: function($currentTarget, $container) { },
				onStart: {
          duration: 800,
          render: function ( $container ) {
						$container.addClass('is-exiting');
		        $smoothState.restartCSSAnimations();
						hide();
          }
        },
				onProgress: {
			    duration: 0,
			    render: function ($container) {
						$container.html("");
						$(".loader").addClass("show");
					}
			  },
				onReady: {
			    duration: 800,
			    render: function($container, $newContent) {
						$(".loader").removeClass("show");
						if($(".flky").length) {
							$flky.flickity('destroy');
							console.log("destroy");
							$flky = "";
						}
						$container.removeClass('is-exiting');
						doScroll();
						setBackground($newContent);
					}
				},
        onAfter: function( $container, $newContent ) {
					$container.html($newContent);
					setFlky();
					setListeners();
					setVideos();
					resize();
					AOS.init();
					reveal();
				}
      };
			$smoothState = $('#page').smoothState($options).data('smoothState');
		}

		var setBackground = function($newContent) {
			console.log($newContent);
			if($newContent.hasClass("home")) {
				$("body").attr("data-background", "home");
			} else if($newContent.hasClass("about")) {
				$("body").attr("data-background", "about");
			} else if($newContent.hasClass("contact")) {
				$("body").attr("data-background", "contact");
			} else {
				$("body").attr("data-background", "none");
			}
		};

		var reveal = function() {
			TweenLite.to($("#site-content-wrap"), 0, {autoAlpha:1, delay:0});
			$(".header").addClass("show");
			// if(!Cookies.get('stdio-promo')) {
			// 	setTimeout(function(){
			// 		$(".modal-promotion").addClass("show");
			// 		Cookies.set('stdio-promo', 'nailed-it', { expires: 7 });
			// 	}, 8000);
			// }
		};

		var resize = function() {
			$(".menu-modal, .intro, .loader").height($(window).height());
		}

		var hide = function() {
			TweenLite.to($("#site-content-wrap"), .4, {autoAlpha:0, delay:0});
		};

		var addBlacklist = function() {
			$('a').each( function() {
				if ( this.href.indexOf('/wp-admin/') !== -1 ||
					 this.href.indexOf('/wp-login.php') !== -1 ) {
					$( this ).addClass( 'wp-link' );
				}
			});
		};

		var setScroll = function(direction) {
		  if ('scrollRestoration' in history) {
		    history.scrollRestoration = 'manual';
		  }
		  $scrollTo = 0;
		};

		var doScroll = function(direction) {
		  $("html, body").animate({
		    scrollTop: $scrollTo + "px"
		  }, 10);
		  $scrollTo = history.state.scrollTop;
		};

		var setVideos = function() {
			$('.lazy-video').each(function(){
				// console.log("video");
				// if(!mobileCheck()) {
					addSourceToVideo($(this));
				// }
			});
		};

		var addSourceToVideo = function(element) {
			var source, src, type;

			source = $('<source/>');
			src = $(element).attr("data-src-webm");
			type = "video/webm";

			$(source).attr("src", src);
			$(source).attr("type", type);
			$(element).append(source);
			$(element).load();

			source = $('<source/>');
			src = $(element).attr("data-src-mp4");
			type = "video/mp4";

			$(source).attr("src", src);
			$(source).attr("type", type);
			$(element).append(source);
			$(element).load();
		};

		var animate =  function() {
			requestAnimationFrame( animate );
			$scrollTop = $(document).scrollTop();
			if($(document).height() - $scrollTop < $(window).height() * 1.5) {
				setMenuTransform("show");
			} else if($scrollTop < $("header").height() * 2) {
				setMenuTransform("top");
			} else {
				switch (getDirection()) {
					case "up":
						setMenuTransform("show");
						break;
					case "down":
						setMenuTransform("hide");
						break;
					default:
						break;
				}
			}
			$lastScrollTop = $scrollTop;
		};

		var getDirection = function() {
			var direction;
			if($lastScrollTop < $scrollTop && $scrollTop > 0){
				direction = "down";
			} else if($lastScrollTop > $scrollTop && $scrollTop > 0) {
				direction = "up";
			} else {
				direction = null;
			}
			return direction;
		};

		var setListeners = function() {
			$('.button--previous').on( 'click', function() {
				console.log($flky);
			  $flky.previous();
			});
			$('.button--next').on( 'click', function() {
			  $flky.next();
			});
			$('.menu-toggle').on( 'click', function() {
			  $(".menu-modal").toggleClass("show");
			});
			$('.faq-toggle').on( 'click', function() {
			  $(this).closest(".faq").find(".description").fadeToggle("slow", "linear");
			});
			$('.about-toggle').on( 'click', function() {
			  $(this).closest(".about").find(".toggle").fadeToggle("slow", "linear");
			});
			$('.hc-toggle').on( 'click', function() {
			  $(this).closest(".healthcare").find(".toggle").fadeToggle("slow", "linear");
			});
		};

		var setFlky = function() {
			if($(".flky").length) {
				$flky = new Flickity('.flky', {
					fullscreen: false,
					accessibility: true,
					adaptiveHeight: false,
					autoPlay: false,
					cellAlign: 'left',
					cellSelector: undefined,
					contain: true,
					draggable: true,
					dragThreshold: 3,
					freeScroll: false,
					selectedAttraction: 0.1,
					friction: 1,
					groupCells: false,
					initialIndex: 0,
					lazyLoad: false,
					percentPosition: false,
					prevNextButtons: false,
					pageDots: true,
					resize: true,
					rightToLeft: false,
					setGallerySize: true,
					watchCSS: false,
					wrapAround: false
				});
			}
		}

		var setMenuTransform = function(state) {
			if(state == "show" && $current != "show") {
				$(".header").addClass("show");
				$current = "show";
			} else if(state == "hide" && $current != "hide") {
				$(".header").removeClass("show");
				$current = "hide";
			} else if(state == "top" && $current != "hide") {
				$(".header").addClass("show");
				$current = "show";
			}
		};

		var requestAnimationFrame = function() {
	    return (
        window.requestAnimationFrame       ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        window.oRequestAnimationFrame      ||
        window.msRequestAnimationFrame     ||
        function(/* function */ callback){
          window.setTimeout(callback, 1000 / 60);
        }
	    );
		}();

	});

})(jQuery, this);
