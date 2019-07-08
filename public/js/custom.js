/*-----------------------------------------------------------------------------------
/*
/* Custom JS
/*
-----------------------------------------------------------------------------------*/
/* Start Document */

(function($) {
		  $(document).ready(function(){

/*----------------------------------------------------*/
/*	Move To Top
/*----------------------------------------------------*/

	$("#movetotop").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#movetotop').fadeIn();
			} else {
				$('#movetotop').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#movetotop a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});


	
/*----------------------------------------------------*/
/*	Tabs
/*----------------------------------------------------*/

$('.nav-tabs a').click(function (e) {
	e.preventDefault();
	$(this).tab('show');
})



/*----------------------------------------------------*/
/*	Element Fadein On Scroll Page
/*----------------------------------------------------*/
effect = $(".effect-loaded").fadeTo(0, 0);

$(window).load( function () {  				  
						  
	  effect.each(function(i) {
						 
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(300,1);
		
    });  
});  

$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() <= $(document).height()) {
		
	 effect.each(function(i) {
						 
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        if (a < b) $(this).fadeTo(500,1);
		
    });
	
   }
});



/*----------------------------------------------------*/
/*	End Document
/*----------------------------------------------------*/		

});

})(this.jQuery);