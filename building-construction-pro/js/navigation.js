(function($) {
	this.MobileNav = function() {
		this.curItem,
			this.curLevel = 0,
			this.transitionEnd = _getTransitionEndEventName();
			var transitionTime = 0.2;

			var defaults = {
					initElem: ".main-menu",
					menuTitle: "Menu"
			}

			// Check if MobileNav was initialized with some options and assign them to the "defaults"
			if (arguments[0] && typeof arguments[0] === "object") {
					this.options = extendDefaults(defaults, arguments[0]);
			}

			// Add to the "defaults" ONLY if the key is already in the "defaults"
			function extendDefaults(source, extender) {
					for (option in extender) {
							if (source.hasOwnProperty(option)) {
									source[option] = extender[option];
							}
					}
			}

			MobileNav.prototype.getCurrentItem = function() {
					return this.curItem;
			};

			MobileNav.prototype.setMenuTitle = function(title) {
					defaults.menuTitle = title;
					_updateMenuTitle(this);
					return title;
			};

			// Init is an anonymous IIFE
			(function(MobileNav) {
					var initElem = ($(defaults.initElem).length) ? $(defaults.initElem) : false;

					if (initElem) {
							defaults.initElem = initElem;
							_clickHandlers(MobileNav);
							_updateMenuTitle(MobileNav);
					} else {
							console.log(defaults.initElem + " element doesn't exist, menu not initialized.");
					}
			}(this));

			function _getTransitionEndEventName() {
				var i,
						undefined,
						el = document.createElement('div'),
						transitions = {
								'transition': 'transitionend',
								'OTransition': 'otransitionend', // oTransitionEnd in very old Opera
								'MozTransition': 'transitionend',
								'WebkitTransition': 'webkitTransitionEnd'
						};

				for (i in transitions) {
						if (transitions.hasOwnProperty(i) && el.style[i] !== undefined) {
								return transitions[i];
						}
				}
			};

			function _clickHandlers(menu) {

				 defaults.initElem.on('click', '.menu-item-has-children > .submenu-icon', function(e) {
                e.preventDefault(); // Prevent default action (following the link)
                var parentItem = $(this).parent('.menu-item-has-children');
                menu.curItem = parentItem;
                _updateActiveMenu(menu);
            });

            // Event handler for parent link click
            defaults.initElem.on('click', '.menu-item-has-children > a', function(e) {
                if ($(this).next('.sub-menu').length === 0) {
                    // If there's no submenu, allow default link behavior (redirecting to the linked page)
                    return true;
                } else {
                    // If there's a submenu, prevent default link behavior
                    e.preventDefault();
                    var parentItem = $(this).parent('.menu-item-has-children');
                    menu.curItem = parentItem;
                    _updateActiveMenu(menu);
                    window.location.href = $(this).attr('href'); // Redirect to the linked page
                }
            });

				defaults.initElem.on('click', '.nav-toggle', function() {
						_updateActiveMenu(menu, 'back');
				});
			};

			// TODO: Make this DRY (deal with waiting for transitionend event)
			function _updateActiveMenu(menu, direction) {
				_slideMenu(menu, direction);
				if (direction === "back") {
						/*defaults.initElem.children('ul').one(menu.transitionEnd, function(e) {
								menu.curItem.removeClass('nav-dropdown-open nav-dropdown-active');
								menu.curItem = menu.curItem.parent().closest('li');
								menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
								_updateMenuTitle(menu);
						});*/

						menu.curItem.removeClass('nav-dropdown-open nav-dropdown-active');
						menu.curItem = menu.curItem.parent().closest('li');
						menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
						_updateMenuTitle(menu);
				} else {
						menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
						_updateMenuTitle(menu);
				}
			};

			// Update main menu title to be the text of the clicked menu item
			function _updateMenuTitle(menu) {
				var title = defaults.menuTitle;
				if (menu.curLevel > 0) {
						title = menu.curItem.children('a').text();
						defaults.initElem.find('.nav-toggle').addClass('back-visible');
				} else {
						defaults.initElem.find('.nav-toggle').removeClass('back-visible');
				}
				$('.nav-title').text(title);
			};

			// Slide the main menu based on current menu depth
			function _slideMenu(menu, direction) {
				if (direction === "back") {
						menu.curLevel = (menu.curLevel > 0) ? menu.curLevel - 1 : 0;
				} else {
						menu.curLevel += 1;
				}
				defaults.initElem.children('ul').css({
						"transform": "translateX(-" + (menu.curLevel * 100) + "%)",
						"transition": "transform " + transitionTime + "s ease" // Apply transition time here
				});

				// Assuming you're using the transitionEnd event to detect the end of the animation
            defaults.initElem.children('ul').one(menu.transitionEnd, function(e) {
                // Perform any actions needed after the transition ends
            });

			};
	}
}(jQuery));

$(document).ready(function() {
	$(".mainm .menu-item-has-children a").first().addClass("submenu-title");
	var $submenu = $('.mainm').find('li.menu-item-has-children').has('.sub-menu');
	$submenu.prepend("<span class='submenu-icon'><i class='fa fa-angle-right'></i></span>");

	$('.js-nav-toggle').on("click", function(e) {
	  e.preventDefault();
	  
	  $(this).toggleClass('nav-close');
	});

    var MobileMenu = new MobileNav({
        initElem: "nav",
        menuTitle: "Menus",
    });

    // Function to adjust the nav-wrapper height dynamically to include visible <ul> and nav-toggle
   function updateNavWrapperHeight() {
    var navWrapper = $('.nav-wrapper');
    if (navWrapper.hasClass('show-menu')) {
        var totalHeight = 0;

        // Iterate over visible <li> elements directly under <nav>
        $('nav > ul > li:visible').each(function() {
            totalHeight += $(this).outerHeight(true); // Includes margin
        });

        // Include the height of the .nav-toggle if it's visible
        if ($('.nav-toggle').is(':visible')) {
            var navToggleHeight = $('.nav-toggle').outerHeight(true); // Includes margin
            totalHeight += navToggleHeight; // Add nav-toggle height to total height
        }

        // Add extra 5 pixels
        totalHeight += 1;

        // Apply the calculated total height to the nav-wrapper
        navWrapper.height(totalHeight);
    } else {
        // Collapse the nav-wrapper when the menu is not shown
        navWrapper.height(0);
    }
}

	// Event handler for when a submenu item is clicked to show the next level
$('nav').on('click', 'li.menu-item-has-children > a', function(e) {
    e.preventDefault();
    setTimeout(updateNavWrapperHeight, 300); // Delay to account for CSS transitions/animations
});


    // Event handler for toggling the main menu
    $('.js-nav-toggle').on('click', function(e) {
        e.preventDefault();
        var navWrapper = $('.nav-wrapper');
        navWrapper.toggleClass('show-menu');
        updateNavWrapperHeight(); // Update height on initial click
    });

    

    // Update height when navigating back in the menu
    $('nav').on('click', '.nav-toggle', function() {
        setTimeout(updateNavWrapperHeight, 300); // Delay if your menu has a back button within nav-toggle
    });
});