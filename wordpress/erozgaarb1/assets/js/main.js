$(function(){
	//cache the windows object
	var $window = $(window);
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this);
		$(window).scroll(function() {

			// scroll the background at var speed
			// the yPos is a negative value because we're scrolling UP!
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			// Put together our final background postion
			var coords = '50%' + yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords});
		});
	});
});