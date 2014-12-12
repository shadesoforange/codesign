/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
	
	//$('.nav-services a.design-thinking').append('&trade;');
	$('.nav-services ul.menu li a.innovation-consulting').before('<div class="tag bg-yellow"></div>');
	$('.nav-services ul.menu li a.accelerated-design').before('<div class="tag bg-orange"></div>');
	$('.nav-services ul.menu li a.design-thinking').before('<div class="tag bg-red"></div>');
	$('.nav-services ul.menu li a.futures').before('<div class="tag bg-magenta"></div>');
	$('.nav-services ul.menu li a.graphics').before('<div class="tag bg-violet"></div>');
	$('.nav-services ul.menu li a.events').before('<div class="tag bg-blue"></div>');
	
	$('.nav-services ul.menu li a').hover(
		function(e){
			$(this).siblings('.tag').slideDown(350);
		},
		function(e){
			$(this).siblings('.tag').slideUp(350);
		}	
	);
	
	
	// Open the mobile menu
	
	$('.mobile-main-menu .menu-trigger').click(function(e){
		e.preventDefault();
		$('.mobile-main-menu .menu').slideToggle(200);
		$('.nav-services-mobile').slideToggle(200);
	});
	
	$('#block-views-homepage-slides-block .slide:first').hide().delay(500).fadeIn(1000);
	
	
	// Make the programs table an accordion
	$('#programmes').accordion({heightStyle:"content"});
	
  }
};


})(jQuery, Drupal, this, this.document);
