$(document).ready(function() {
	$('input[type="submit"]').click(function() {
		$(this).addClass('partial-fade');
		$(this).animate({
			opacity : 0.1
		}, 8).animate({
			opacity : 0.9
		}, 226).animate({
			opacity : 0.5
		}, 86);
		setTimeout(function() {
			$('input[type="submit"]').removeClass('partial-fade');
		}, 366).animate({
			opacity : 1
		}, 86);
	});
});
