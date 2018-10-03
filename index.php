<!DOCTYPE html>
<html lang="nb">
<head>
	<title>Hjem</title>
	<?php include "common/head.html"; ?>
	<link rel="stylesheet" href="css/index.css" type="text/css"/>
</head>

<body>
	<div id="wrapper">
		<?php include "common/header.html"; ?>
		<main id="main_content">
			<h2>
				Lorem ipsom
			</h2>
			<figure class="float">
				<img alt="Spinning skull and bones" src="media/images/skullgre.gif" />
				<figcaption>Spinning skull and bones</figcaption>
			</figure>
			<p>
				Vestibulum consequat felis et velit imperdiet, eu dignissim odio aliquet. Donec egestas sollicitudin velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut a quam sit amet lorem iaculis lacinia. Sed magna dolor, sodales nec efficitur eget, sollicitudin eu magna. Praesent quis aliquet diam. Nam faucibus augue at sapien elementum varius. Phasellus dictum porttitor nisl ut elementum. Sed et ante et dolor congue placerat. Maecenas porta posuere augue malesuada pellentesque. Nunc ultrices nulla neque, sit amet ultricies sapien scelerisque et. Maecenas ac ligula nec nisi scelerisque pharetra faucibus et elit. Curabitur finibus efficitur velit non scelerisque.
			</p>
		</main>
		<aside id="sidebar">
			<section>
				<h2>video</h2>
				<div class="video_container"><!-- denne diven er nødvendig -->
					<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/hNuCxUVWUyg?rel=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</section>
			<section>
				<h2>responsivt webdesign</h2>
				<ul>
					<li>
						<a href="http://www.milli.no/content/hva-er-responsiv-design">
							artikkel
						</a>
					</li>
					<li>
						<a href="https://no.wikipedia.org/wiki/Responsiv_nettside">
							artikkel
						</a>
					</li>
					<li>
						<a href="https://www.techweb.no/blogg/hva-er-responsivt-design">
							artikkel
						</a>
					</li>
					<li>
						<a href="https://www.digi.no/artikler/derfor-velger-nesten-alle-responsiv-webdesign/320517">
							artikkel
						</a>
					</li>
					<li>
						<a href="https://www.idium.no/blogg/2015/responsivt-design-hva-og-hvorfor/">
							artikkel
						</a>
					</li>
				</ul>
			</section>
			<section>
				<h2>git hub</h2>
				<a href="https://www.google.com/search?q=Github" class="btn">
					Søketreff på google
				</a>
				<!--
					<button type="button">Søketreff på google</button>
					<script>
						document.querySelector("button").onclick = x => location.href = "https://www.google.com/search?q=Github";
					</script>
				-->
			</section>
		</aside>
		<?php include "common/footer.html"; ?>
	</div>
</body>
</html>