(x=>{
	for(let elem of document.querySelectorAll('link[rel="icon"][href], link[rel=\'icon\'][href]'))
		elem.outerHTML = "";
	
	var icon_link = Object.assign(
		document.createElement("link"), {
			rel: "icon",
			type: "image/png"
		}
	),
	icon = new Image;
	
	document.head.appendChild(icon_link);

	icon.onload = x => {
		var w = icon.width,
			h = icon.height,
			canvas = document.createElement("canvas"),
			c = canvas.getContext("2d");
			hrefs = [];
		if((w >= h) || (h % w !== 0))
			return;
		canvas.width = icon.width;
		canvas.height = icon.width;
		for(var i = 0, l = h / w; i < l; ++i){
			c.drawImage(icon, 0, -i*w);
			hrefs.push(canvas.toDataURL());
		}
		i = 0;
		var f = a => {
			icon_link.href = hrefs[i];
			if(++i >= l)
				i -= l;
		};
		f();
		setInterval(f, 150);
	};
	
	/*let script_elem = document.querySelector("script[anim-icon]");
	icon.src = script_elem.getAttribute("anim-icon");*/
	icon.src = "media/images/favicon-anim.png";
})();