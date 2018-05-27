var menuIcon = document.getElementById('menu-icon'),
	sidebar = document.getElementById('sidebar');

window.addEventListener('click', function(e){   
  if (menuIcon.contains(e.target)){
    	menuIcon.classList.toggle("active");
    	sidebar.classList.toggle("active");
  } else{
    // Clicked outside the sidebar
    menuIcon.classList.remove("active");
    sidebar.classList.remove("active");
  }
});
