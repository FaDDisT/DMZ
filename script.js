function showMenu() {
	$('.menu').toggle();
}

function getTweets() {
	$('.feed').load('feed.php');
}

$(document).ready(function() {

	$('.hidden').on('touchstart',showMenu);
	getTweets();

});