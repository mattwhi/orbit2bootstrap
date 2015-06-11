(function($) {
	//alternates the feature section 
	$( ".col-md-7:odd" ).addClass( "col-md-push-5" );
	$( ".col-md-5:odd" ).addClass( "col-md-pull-7" );

	$('.blog-entry').hover(function() {
		$(this).find('article').fadeToggle(500);
	});
	//page loader
	$(window).load(function(){
    	$('.cover').fadeOut(1000);
    });

})(jQuery);