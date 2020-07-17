/*
TABLE OF CONTENTS
1.0 functions
2.0 window.resize FUNCTION
3.0 window.load FUNCTION
    3.1 activate word rotator plugin
4.0 window.scroll FUNCTION
5.0 document.ready FUNCTION
    5.1 "when we launch" button clicked
    5.2 "hide countdown" button clicked
    5.3 navigation arrow (on large devices) clicked
    5.4 navigation arrow (on extra small devices) clicked
    5.5 keyboard arrow (left and right) pressed
    5.6 activate countdown
    5.7 activate slideshow background
    5.8 activate slideshow with kenburns effect
    5.9 activate single image + firefly effect
    5.10 activate youtube video background
    5.11 set background for star-effect
    5.12 init owl-carousel for services
    5.13 init owl-carousel for works
    5.14 activate magnific popup image
    5.15 check subscribe form filled or not
    5.16 validate and submit subscribe form
    5.17 validate and submit contact us form
	5.18 activate local video background
*/

(function($) {
	"use strict";
	
	/*-- ================================ --
		1.0 FUNCTIONS
	/*-- ================================ --*/
	function ShowHomeContent(){
		//-- set visible to show-countdown button (fix bug on firefox)
		$('.home-section .show-countdown').css('display','inline-block');
		
		$('.home-section .logo img').removeClass('entrance').addClass('fadeInDown');
		//$('.home-section h3.small-title, .home-section .wordrotator-container, .home-section .show-countdown').removeClass('entrance').addClass('fadeInDown');
		
		//-- show guide on large devices
		if($(window).width() >= 1024){
			//$('.home-section .guide').removeClass('entrance').addClass('fadeInUpCenterX');
		}
	}
	
	
	
	
	/*-- ================================ --
		3.0 window.load FUNCTION
	/*-- ================================ --*/
	$(window).load(function(e) {
		//-- hide preloader
		$('.preloader').addClass('animated fadeOut');
		ShowHomeContent();
                $('.preloader').hide();
		//-- show home content
//		var showContent = setTimeout(function(){
//			ShowHomeContent();
//			
//			//-- hide preloader
//			$('.preloader').hide();
//			
//			
//			
//			clearTimeout(this);
//		},1000);
        });
	//-- end window.load function
	
	
	/*-- ================================ --
		5.0 document.ready FUNCTION
	/*-- ================================ --*/
	$(document).ready(function(e) {	
		
				
		//-- 5.11 set background for star-effect
		if($(".bg-star-effect").is(':visible')){
			$(".bg-star-effect").backstretch([
				"template/img/slide2-2560x1600.jpg"
			],{
				duration:6000,
				fade:'normal'
			});
		}
                //-- 5.7 activate slideshow background
		if($(".bg-container-slideshow").is(':visible')){
			$(".bg-container-slideshow").backstretch([
                                "template/img/slide5-2560x1600.jpg",
				"template/img/slide2-2560x1600.jpg",
				
			],{
				duration:6000,
				fade:'normal'
			});
		}
                
                //-- 5.8 activate slideshow with kenburns effect
		if($(".bg-container-kenburns").is(':visible')){
			$(".bg-container-kenburns").kenburnsy({
        		fullscreen: true
        	});
		}
		
		
		
        });
	//-- end document.ready function
})(jQuery);