function counter(id, start, end, duration) {
    var range = end - start,
        current = start,
        increment = end > start? 1 : -1,
        stepTime = Math.abs(Math.floor(duration / range)),
        obj = document.getElementById(id),
        timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

counter("tattoosMade", 0, 5000, 2000);

setInterval(function() {
        document.getElementById("tattoosMade").innerHTML = "***t load of tattoos";
    }, 2000);