(function($){
"use strict"

jQuery(document).ready(function(){
	jQuery(window).scroll( function(){

		var difHitht = jQuery(window).scrollTop();

		if( difHitht > 100 ){
			jQuery(".scroll-to-top").fadeIn();
		}else{
			jQuery(".scroll-to-top").fadeOut();
		}
	});

	jQuery('.scroll-to-top a').on('click', function(){

		jQuery("html, body").animate({"scrollTop" : 0}, 2000);

		return false;
	})




})

}(jQuery) );