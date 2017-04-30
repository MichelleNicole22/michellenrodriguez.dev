jQuery(function($){
		
        $(window).load(function() { 
  		$('.flexslider').flexslider({
			controlNav: false, 
            slideshowSpeed: document.getElementById("sliderspeed").innerHTML,
        });
   		});
		
});