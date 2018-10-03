<!DOCTYPE html>
<html lang="nb">
<head>
	<title>CSS Layouts</title>
	<?php include "common/head.html"; ?>
	<link rel="stylesheet" href="css/artikkel.css" type="text/css"/>
</head>

<body>
	<div id="wrapper">
		<?php include "common/header.html"; ?>
		<main id="main_content">
			<article>
				<h2>
					CSS Layouts
				</h2>
				<section>
					<h3>Flexbox</h3>
					<p>
						Flexbox, også kalt flex, brukes til å gjøre CSS på elementer i én dimensjon.
						Hvis man har en rekke elementer så er det god idé å bruke flex. 
						Med flex kan man midtjustere, endre rekkefølge, lage mellomrom, og sikkert mye mer.
					</p>
				</section>
				<section>
					<h3>Grid</h3>
					<figure class="float">
						<img alt="Forsiden" src="media/images/grid.png"/>
						<figcaption>Jeg har brukt grid for å forme dette dettstedet. Her kan du se hvordan rutenettet på forsiden er bygd opp.</figcaption>
					</figure>
					<p>
						grid er et system der elementer blir satt inn i et rutenett.
						<br />
						Det er ikke så mye mer enn det å si, er det vel?
						<br />
						Jeg har ikke blitt spurt om noe spesifikt, så jeg har bestemt meg for at dette er nok om grid.
					</p>
				</section>
				<section>
					<h3>Float</h3>
					<p>
						Float brukes til å flytte elementer til høyre eller venstre.
						Det brukes ikke ofte lenger, men på dette nettstedet brukes det på noen av bildene.
					</p>
				</section>
			</article>
		</main>
		<?php include "common/footer.html"; ?>
	</div>
</body>
</html>