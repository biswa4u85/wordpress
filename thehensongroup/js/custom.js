// JavaScript Document
// menu sticky
$(window).scroll(function(){
	  if ($(window).scrollTop() >= 200) {
		$('.roll_menu').addClass('roll_activated');
	   }
	   else {
		$('.roll_menu').removeClass('roll_activated');
	   }
});

// header
jQuery(function ($) {
				$("#multi_menufd1b35d95c").accordionpromulti({
					accordion: true,
					speed: 300,
					closedSign: '+',
					openedSign: '-'
				});
}); 
$(document).ready(function(){
		$(".primary_structure>li>a").hover(function(){
    		$(this).next().show();
  		},function() {
   	 		$(this).next().hide();
  		});
		$("div.dnngo_menuslide").hover(function(){
    		$(this).show();
  		},function() {
   	 		$(this).hide();
  		});	
	});
	
// mobile menu
$( ".switchOpen" ).click(function() {
  $('html').toggleClass("navigation_is-visible");
  $('.mobile_header span').toggleClass("SwitchClose");
});

new WOW().init();