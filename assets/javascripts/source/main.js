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

    //3 column animation on front page
    $(window).scroll(function(event){
        var y = $(this).scrollTop(); //grap the screen location
        if (y >= 300) { //set the screen location to start the animation
            //grap the css classes fade in and animate by adding css classes.
            $('.thumbnail1,.thumbnail2, .thumbnail3')
            .fadeIn(200)
            .addClass('animate');
        }
        //animate the parallax call out at a higher screen position
        if (y >= 800) {
            $('.callout.parallax')
            .slideDown(800);
        }
        if (y >= 1200) {
            $('.featurette:nth-of-type(odd), .featurette:nth-of-type(even)')
            .fadeIn(200)
            .addClass('animate');
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