jQuery(document).ready(function($) {
	//Adding Documentation menu item
	$('#navigation li:last').before('<li class="page_item"><a title="Documentation" href="http://docs.textflowproject.org/">Documentation</a></li>');

	var height = -420;
	var width = -780;
	var links = $('.tabs a');

	function horizontal_slide (position, width){
		$("#features-content").animate({
			marginLeft: (position * width) + "px"
		}, 500);
	}

	function vertical_slide (position, height){
		$("#screenshots").fadeOut('fast').animate({
			marginTop: (position * height) + "px"
		}, 'fast').fadeIn('fast');
	}

	if (links.length !== 0) {
	
		$(links[0]).click(function() {
						  $('.tabs a').removeClass('active-tab');
						  $(this).addClass('active-tab');
						  horizontal_slide (0, width);
						  return false;
								   });
		$(links[1]).click(function() {
								   $('.tabs a').removeClass('active-tab');
								   $(this).addClass('active-tab');
								   horizontal_slide (1, width);
								   return false;
								   });
		$(links[2]).click(function() {
								   $('.tabs a').removeClass('active-tab');
								   $(this).addClass('active-tab');
								   horizontal_slide (2, width);
								   return false;
								   });
		$(links[3]).click(function() {
								   $('.tabs a').removeClass('active-tab');
								   $(this).addClass('active-tab');
								   horizontal_slide (3, width);
								   return false;
								   });
	}
});
