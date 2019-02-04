(function ($) {
 "use strict"; 
	/*---------------------
	 jQuery MeanMenu
	--------------------- */
	jQuery('nav#dropdown').meanmenu();
	
})(jQuery);   
 
$(document).ready(function(){	
	$(".reply").hide();
	$(".reply_button").click(function(){
			$(".reply").show();
		});
	$(".reply_close").click(function(){
			$(".reply").hide();
		});
	
	});
	