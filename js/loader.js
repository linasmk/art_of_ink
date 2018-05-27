window.onload = function() {
	document.getElementById('loader').classList.add('d-none');
	document.getElementById('wrapper').classList.remove('d-none');

	// show the scrolldown icon only after the headline has fully appeared
	setTimeout( function() {
		document.getElementById('scrollDown').classList.remove('d-none'); 
	}, 2000);

	document.getElementById('mainHeadline').classList.add('typewriter');
}