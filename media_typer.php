<!DOCTYPE html>
<html lang="nb">
<head>
	<title>Media typer</title>
	<?php include "common/head.html"; ?>
	<link rel="stylesheet" href="css/artikkel.css" type="text/css"/>
</head>

<body>
	<div id="wrapper">
		<?php include "common/header.html"; ?>
		<main id="main_content">
			<article>
				<h2>
					media typer
				</h2>
				<section>
					<h3>hva er en media type?</h3>
					<figure class="float">
						<img alt="Printer" src="media/images/printer.jpg"/>
						<figcaption>
							Media typen printer er nyttig fordi man gjerne vil ha forskjellig design for skjermer og printere.
						</figcaption>
					</figure>
					<p>
						Media typer i CSS er sånn at man kan bruke et sett regler kun hvis nettsiden blir vist på en spesifik type dupeditt.
						For eksempel: Man kan ha et stilark spesielt for printing, eller et stilark for skjermer, eller for skjermlesere.
					</p>
				</section>
				<section>
					<h3>
						andre media typer...
					</h3>
					<figure class="float">
						<img alt="Laptop" src="media/images/laptop.gif" />
						<figcaption>Laptop</figcaption>
					</figure>
					<p>
						Media typer som TV Projection Handheld og flere brukes lite den dag i dag,
						og det er fordi mange mener at responsivt design er bedre.
					</p>
				</section>
			</article>
		</main>
		<?php include "common/footer.html"; ?>
	</div>
</body>
</html>