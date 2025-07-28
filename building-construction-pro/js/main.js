(function ($) {
	"use strict";
	
	var hgApp = {
		/* ---------------------------------------------
		 Content Loading
		--------------------------------------------- */	
		
		/* ---------------------------------------------
		 One Page Menu Script
		--------------------------------------------- */
		onePageMenu: function() {
			function onePageNav($selector) {
				var $navSelector = $($selector);
				$navSelector
				.not('[href="#"]')
				.not('[href="#0"]')
				.on('click', function(event) {
				    if ( location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname ) {
				      	var target = $(this.hash);
				      	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

				      	$navSelector.removeClass("active");
				      	if( target.length) {
					      	if($(this)[0].hash.slice(1) === target[0].id) {
					      		$(this).addClass("active");
					      	} else {
					      		$(this).removeClass("active");
					      	}
				      	}
				     	
					    if (target.length) {
					        event.preventDefault();
					        $('html, body').animate({
					          	scrollTop: target.offset().top
					        }, 1000);
					    }
				    }
				});

				$navSelector.each(function(event) {
			      	var target = $(this.hash);
			      	if( target.length) {
				      	if(location.hash.slice(1) === target[0].id) {
				      		$(this).addClass("active");
				      	} else if(!location.hash) {
				      		
				      	} else {
				      		$(this).removeClass("active");
				      	}
			      	}
				});

				function onScroll(event){
				    var scrollPos = $(document).scrollTop();
				    $navSelector.each(function () {
				        var currLink = $(this);
		                if(currLink[0].hash !== "" && $(currLink[0].hash).position() !== undefined) {

	                		var $getNavHas = $(currLink).prop('href').split('#')[1],
	                			$getSection = $('#' + $getNavHas); 

	                		$getSection.each(function() {
		                		var $topPos = $(this).offset().top,
		                			$topPosRound = Math.round($topPos - 120 ),
		                			$presentPos = Math.round(scrollPos);

		                		if ($topPosRound <= $presentPos && $topPosRound + $(this).height() > $presentPos) {
		                		    $(currLink).parent().addClass("active"); 
		                		} else {
		                			$(currLink).parent().removeClass("active");
		                		}
	                		});
		                } else {
		                	return false;
		                }
				    });
				}

				$(document).on("scroll", onScroll);	     
			}
			onePageNav('.mainmenu li a');

			
			var $navRightIssue = $(".header-left-block .mainmenu ul li");
			$navRightIssue.on("mouseenter mouseleave", function (e) {
			    var $self = $(this);
			    if ($("ul", $self).length) {
			        var elm = $("ul:first", $self),
			            off = elm.offset(),
			            l = off.left,
			            w = elm.width(),
			            docW = $(".site-navigation").width(),
			            isEntirelyVisible = (l + w <= docW);

			        if (!isEntirelyVisible) {
			            $self.addClass("right-side-menu");
			        } 
			    }
			});
		},

		/* ---------------------------------------------
		 Menu Script
		--------------------------------------------- */
		
		/* ---------------------------------------------
		Isotope Activation
		 --------------------------------------------- */
		isotope_activation: function() {
			var IsoGriddoload = $('.portfolio-grid');
			IsoGriddoload.isotope({
			    itemSelector: '.item',
			    masonryHorizontal: {
			        rowHeight: 100
			    }
			});

			var ProjMli = $('.portfolio-filter li a');
			var ProjGrid = $('.portfolio-grid');
			ProjMli.on('click', function(e) {
				e.preventDefault();
			    ProjMli.removeClass("active");
			    $(this).addClass("active");
			    var selector = $(this).attr('data-filter');
			    ProjGrid.isotope({
			        filter: selector,
			        animationOptions: {
			            duration: 750,
			            easing: 'linear',
			            queue: false,
			        }
			    });
			});
		},		
		/* ---------------------------------------------
		 function initializ
		 --------------------------------------------- */
		initializ: function() {
			hgApp.onePageMenu();
			//hgApp.menu_script();
			//hgApp.content_video();
			//hgApp.background_image();
			//hgApp.allCarousel();
			//hgApp.progress_var();
			//hgApp.popupscript();
			//hgApp.tooltipScript();
			//hgApp.scroll_script();
		}
	};
	/* ---------------------------------------------
	 Document ready function
	 --------------------------------------------- */
	$(function() {
		hgApp.initializ();
	});

	$(window).on('load', function() {
		//hgApp.contentLoading();
		hgApp.isotope_activation();
	});
})(jQuery);
