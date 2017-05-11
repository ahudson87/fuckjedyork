jQuery(document).ready(function($) {

	$(document).foundation();


	var windowHeight = $(window).height();
	setTimeout(function(){
		$('.bg-image, .bg-overlay').css("height", (windowHeight + 100));
	}, 0);


	var $mobileMenuButton = $("#mobile-menu");
	var $mobileMenuHolder = $("#mobile-menu-holder");
	var $menuBar = $(".menu-bar");
	var $mobileMenuVisible = false;
	// console.log("menu hidden");
	function toggleMobileMenu() {
		if (!$mobileMenuVisible) {
			// console.log("show mobile menu");
			$mobileMenuHolder.toggleClass( "expanded" )
			$mobileMenuVisible = true;
		} else {
			// console.log("hide mobile menu");
			$mobileMenuHolder.toggleClass( "expanded" )
			$mobileMenuVisible = false;
		}
	}
	$mobileMenuButton.click(toggleMobileMenu);

	


	var $socialFooterCloseButton = $("#social-footer .social-close-x");
	var $socialButtonsList = $("#social-expanded");
	var $socialFooterExpandHolder = $("#social-footer .social-expand-holder");
	var $socialFooterExpandButton = $("#social-footer .social-expand-icon");
	
	var $socialButtonsVisible = true;
	// $socialButtonsList.hide("fast");
	// $socialFooterExpandHolder.show("fast");

	if (document.documentElement.clientWidth < 810) {
		$socialButtonsVisible = false;
		$socialButtonsList.hide("fast");
		$socialFooterExpandHolder.show("fast");
	}

	$socialFooterCloseButton.click(function() {
		if ($socialButtonsVisible) {
			$socialButtonsList.hide("fast");
			$socialFooterExpandHolder.show("fast");
			$socialButtonsVisible = false;
		}
	});
	$socialFooterExpandButton.click(function() {
		if (!$socialButtonsVisible) {
			$socialButtonsList.show("fast");
			$socialFooterExpandHolder.hide("fast");
			$socialButtonsVisible = true;
		}
	});

	// if (document.documentElement.clientWidth < 810) {
	// 	setTimeout(function(){
	// 		if ($socialButtonsVisible) {
	// 			$socialButtonsList.hide("slow");
	// 			$socialFooterExpandHolder.show("slow");
	// 			$socialButtonsVisible = false;
	// 		}
	// 	}, 3500);
	// }


	$( "#contribute-modal" ).hide();
	$( "#subscribe-modal" ).hide();

	$( "#contribute-trigger" ).click(function() {
		$( "#contribute-modal" ).show();
	 	$('#modal-overlay').toggleClass("hide-the-modal");
	});

	$( "#subscribe-trigger" ).click(function() {
		$( "#subscribe-modal" ).show();
	 	$('#modal-overlay').toggleClass("hide-the-modal");
	});

	$( ".close-modal" ).click(function() {
	 	$( "#modal-overlay" ).toggleClass("hide-the-modal");
	 	$( "#contribute-modal" ).hide();
		$( "#subscribe-modal" ).hide();
		$( "#welcome-modal" ).hide();
	});

 });