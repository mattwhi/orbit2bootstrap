(function($) {
	//alternates the feature section 
	$( ".col-md-7:odd" ).addClass( "col-md-push-5" );
	$( ".col-md-5:odd" ).addClass( "col-md-pull-7" );
	$('.blog-entry').hover(function() {
		$(this).find('article').fadeToggle(500);
	});
	//page loader
	$(window).load(function(){
    	$('.cover').delay(1000).fadeOut(1000);
    });

    $(window).scroll(function(event){
        var y = $(this).scrollTop();
        if (y >= 300) {
            $('.thumbnail1').fadeIn(200).addClass('animate');
            $('.thumbnail2').fadeIn(200).addClass('animate');
            $('.thumbnail3').fadeIn(200).addClass('animate');
        }
        // if (y <= 300) {
        //     $('.th-holder.one').removeClass('animate').fadeOut(400);
        //     $('.th-holder.two').removeClass('animate').fadeOut(400);
        //     $('.th-holder.three').removeClass('animate').fadeOut(400);
        // }
        if (y >= 600) {
            $('.callout.parallax').fadeIn(800);
        }
    });

    $.fn.parallax = function(options) {
        var windowHeight = $(window).height();
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
        // Iterate over each object in collection
        return this.each( function() {
        // Save a reference to the element
        var $this = $(this);
        // Set up Scroll Handler
        $(document).scroll(function(){
    var scrollTop = $(window).scrollTop();
            var offset = $this.offset().top;
            var height = $this.outerHeight();
    // Check if above or below viewport
if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
return;
}
var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
        // Apply the Y Background Position to Set the Parallax Effect
    $this.css('background-position', 'center ' + yBgPosition + 'px');        
            });
        });
    };
})(jQuery);

jQuery(document).ready(function($){
	$('.parallax-window').parallax({
		speed : 0.15
		});
});