window.addEventListener("load", e=>{
	var menu_links = document.querySelectorAll("#navbar a"),
		max_width = 0;
	for(a of menu_links){
		let width = parseFloat(getComputedStyle(a).width);
		if(width > max_width)
		max_width = width;
	}
	for(a of menu_links)
		a.style.width = max_width + "px";
});