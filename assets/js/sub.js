// Zoom In Out event
$(window).on('load', function(){
	var currentZoom = 1;
	$('.in').click(function() {
		currentZoom += 0.1;
		$('body').css({
			zoom: currentZoom,
			'-moz-transform': 'scale(' + currentZoom + ')',
			'--webkit-transform': 'scale(' + currentZoom + ')',
			'-ms-transform': 'scale(' + currentZoom + ')'

		});
	});
	$('.out').click(function() {
		currentZoom -= 0.1;
		$('body').css({
			zoom: currentZoom,
			'-moz-transform': 'scale(' + currentZoom + ')',
			'--webkit-transform': 'scale(' + currentZoom + ')',
			'-ms-transform': 'scale(' + currentZoom + ')'
		});
	});
});