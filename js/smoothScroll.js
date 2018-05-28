// Function for smooth scrolling
function smoothScroll() {
    window.scrollTo({
      top: window.innerHeight,
      behavior: "smooth"
    });
}

// Sets the eventlistener to "scrollDown" icon
document.getElementById('scrollDown').addEventListener("click", smoothScroll);