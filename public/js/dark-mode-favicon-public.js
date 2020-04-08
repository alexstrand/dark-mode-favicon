(function() {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 
		/*
		* Dark Mode Favicon - Inject Dark Mode Favicon into icon element in head.
		*/
	 
		var darkModeUrl;
		var defaultIcon;
	
		var darkModeTrigger = function() {
			
			defaultIcon = document.querySelector("link[rel*='icon']");
			
			if ( window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ) {
			    
			    if ( document.getElementById("dm-favicon") != null ) {
			    	
					if ( defaultIcon != null ) {
						
						darkModeUrl = document.getElementById("dm-favicon").getAttribute("href");
						defaultIcon.setAttribute("href", darkModeUrl);

					}
					
				}
			    
			}
			
		}
	
		window.onload = function() {
		    darkModeTrigger();
		};

})();

