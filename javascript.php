<?php /* Template Name: JavaScript */
header( 'Content-type: application/x-javascript' );
?>
jQuery(document).ready(function(){
	var header = jQuery('#branding');
	jQuery(window).scroll(function(e){
    		if (header.offset().top !== 0){
        		if (!header.hasClass('shadow')){
            			header.addClass('shadow');
        		}
    		} else {
        		header.removeClass('shadow');
    		}
	});
});