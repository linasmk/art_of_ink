var days = 'sunday,monday,tuesday,wednesday,thursday,friday,saturday'.split(','),
	currentdate = new Date(),
	thisDay = currentdate.getDay(),
	time = currentdate.getHours();

document.getElementById(days[thisDay]).classList.add('bold');


//Function that checks if the current time is inbetween Art of Ink opening hours
function openStatus() {
	if((thisDay !== 6 && thisDay !== 7 && thisDay !== 2) && (time >= 10 && time <= 18)) {
		document.getElementById('openStatus').innerHTML = "open :)";
		document.getElementById('openMessage').classList.remove("d-none");
	}
	else if((thisDay == 2) && (time >= 11 && time <= 19)) {
		document.getElementById('openStatus').innerHTML = "open :)";
		document.getElementById('openMessage').classList.remove("d-none");
	}
	else {
		document.getElementById('openStatus').innerHTML = "closed :(";
		document.getElementById('closedMessage').classList.remove("d-none");
	}
}

openStatus();