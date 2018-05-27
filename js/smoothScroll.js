document.getElementById('scrollDown').onclick = function(event) {
    window.scrollTo({
      top: window.innerHeight,
      behavior: "smooth"
    });
}