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
    //Convert Nav to fixed on scroll
    // $(window).bind('scroll', function () {
    //     if ($(window).scrollTop() > 110) {
    //         $('.navbar').removeClass('navbar-static-top');
    //         $('.navbar').addClass('navbar-fixed-top');
    //         $('.navbar-fixed-top').slideDown(2000);
    //     } else {
    //         $('.navbar').removeClass('navbar-fixed-top');
    //         $('.navbar').addClass('navbar-static-top');
    //     }
    // });
    //thumbnail visable
    $(window).bind('scroll', function () {
       if ($(window).scrollTop() > 110) {
            $('.th-holder.one')
            .delay(2000)
            .animate({
                opacity: 1,
                left: "+=200",
                height: "toggle"
                }, 3000);
            $('.th-holder.two')
            .delay(2000)
            .animate({
                opacity: 1,
                top: "+=200",
                height: "toggle"
                }, 3000);
                    
            $('.th-holder.three')
            .delay(2000)
            .animate({
                opacity: 1,
                right: "+=200",
                height: "toggle"
                }, 3000);
            }            
            $(this).unbind("scroll");
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