if(/chrome/i.test(navigator.userAgent))
	(x=>{
		document.body.innerHTML = `
			<div id="overlay">
				<style>
					#wrapper{display:none !important;}
					#overlay{
						position: fixed;
						width: 100%;
						height: 100%;
						top: 0;
						left: 0;
						background-color: #000;
						display: flex;
						justify-content: center;
						align-items: center;
					}
				</style>
				<audio controls>
					<source src="media/audio/final_countdown.ogg"/>
				</audio>
			</div>`;
		Object.assign(document.getElementsByTagName("audio")[0], {
			onvolumechange: function(){
				this.muted = false;
			},
			onplay: function(){
				this.parentElement.style.display = "none";
				document.querySelector("#overlay style").outerHTML = "";
			}
		});
	})();
else
	(new Audio("media/audio/final_countdown.ogg")).play();