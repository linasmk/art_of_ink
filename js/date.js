var days = 'sunday,monday,tuesday,wednesday,thursday,friday,saturday'.split(','),
	currentdate = new Date(),
	thisDay = currentdate.getDay();
	time = currentdate.getHours();

document.getElementById( days[thisDay] ).classList.add('bold');

function openStatus() {
	if((thisDay !== 6 && thisDay !== 1 && thisDay !== 2) && (time >= 10 && time <= 18)) {
		console.log("open");
		document.getElementById('openStatus').innerHTML = "open :)";
		document.getElementById('openMessage').classList.remove("d-none");
	}
	else if((thisDay == 2) && (time >= 11 && time <= 19)) {
		console.log("open");
		document.getElementById('openStatus').innerHTML = "open :)";
		document.getElementById('openMessage').classList.remove("d-none");
	}
	else {
		console.log("closed");
		document.getElementById('openStatus').innerHTML = "closed :(";
		document.getElementById('closedMessage').classList.remove("d-none");
	}
}

openStatus();