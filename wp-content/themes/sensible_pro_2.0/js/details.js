(function($){ 
	
	$('.details').one('inview', function (event, visible) {
		
	
   	 setTimeout(function(){
		
  		$('#odometer1').html($('#od1').val())      
		$('#odometer2').html($('#od2').val()) 
		$('#odometer3').html($('#od3').val()) 
		$('#odometer4').html($('#od4').val())  
		$('#odometer5').html($('#od5').val())
		
	});  
	
	
	window.odometerOptions = {
		
  		format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal poin
                   
	};  
	
   
 
}); 
	
	
})( jQuery );

