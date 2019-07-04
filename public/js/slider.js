$(document).ready(function(){
		 $('#slider').nivoSlider({
			effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
			slices: 15, // For slice animations
			boxCols: 8, // For box animations
			boxRows: 4, // For box animations
			animSpeed: 500, // Slide transition speed
			pauseTime: 3000, // How long each slide will show
			startSlide: 0, // Set starting Slide (0 index)
			directionNav: true, // Next & Prev navigation
			controlNav: false, // 1,2,3... navigation
			controlNavThumbs: false, // Use thumbnails for Control Nav
			pauseOnHover: true, // Stop animation while hovering
			manualAdvance: false, // Force manual transitions
			prevText: '<i class="icon-angle-left"></i>', // Prev directionNav text
			nextText: '<i class="icon-angle-right"></i>', // Next directionNav text
			randomStart: false, // Start on a random slide
			beforeChange: function(){}, // Triggers before a slide transition
			afterChange: function(){}, // Triggers after a slide transition
			slideshowEnd: function(){}, // Triggers after all slides have been shown
			lastSlide: function(){}, // Triggers when last slide is shown
			afterLoad: function(){} // Triggers when slider has loaded
	    });
		
	  $(window).load(function(){
		  
		  var $container = $('.portfolio-container');
	
		  $container.isotope({
			itemSelector : '.item'
		  });
	  
       
      $('.portfolio-filter a').click(function(){
	  
	  	 $('.portfolio-filter').find('.active').removeClass('active');
		 if(!$(this).hasClass('active'))
		 	$(this).addClass('active');
		 
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  return false;
		});
		
    });
	$('.entry-slider').flexslider({
				animation: "fade",            
				easing: "swing",               
				controlNav:false,
				prevText: "<i class='icon-angle-left'></i>",
				nextText: "<i class='icon-angle-right'></i>", 
				before: function(slider) {
				},
				after: function(slider) {
				}
			});
	
	
    });