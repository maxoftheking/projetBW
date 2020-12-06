<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" href="css/vente.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            include("header.php");
            include("menu.php");
            include("fixed.php");
        ?>
        <article>
        <div class="container">
		<div class="title">
			<h1>Nos Point De Ventes</h1>
		<br>
		<div class="info">
			<div class="info-detail">
				<div><h3>PEZENAS</h3></div>
				<br>
				<div><span>7 Rue Alfred Maurel, 34120 Pézenas</span></div>
			</div>
			<div class="info-sp">

			</div>
			<div class="info-magasin">
				<div class="info-title">Horaires D'ouverture: </div>
				<div class="info-date-tele">
					<div class="info-left">Lun. au Sam. <br></div>
					<div class="info-right">9h30-13h / 15h30-19h30</div>
				</div>
				<br>
				<div class="info-date-tele">
					<div class="info-left">Téléphone</div>
					<div class="info-right">04.67.77.80.88</div>
				</div>
				<div class="info-date-tele">
					<div class="info-left">Courrier</div>
					<div class="info-right">chezLesProducteurs@gmail.com</div>
				</div>
			</div>
			<div class="info-sp">

			</div>
			<div class="info-map">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ieRGsWLNnyUGLtNtsST6T9FXccNO2DDh" width="400" height="300"></iframe>
			</div>
		</div>
		<br>
		<div class="info">
			<div class="info-detail">
				<div><h3>LODEVE</h3></div>
				<br>
				<div><span>6 bouvlevard montalangue, 34700 Lodeve</span></div>
			</div>
			<div class="info-sp">

			</div>
			<div class="info-magasin">
				<div class="info-title">Horaires D'ouverture: </div>
				<div class="info-date-tele">
					<div class="info-left">Lun. au Sam.</div><br>
					<div class="info-right">9h30-13h / 15h30-19h30</div>
				</div>
				<br>
				<div class="info-date-tele">
					<div class="info-left">Téléphone</div>
					<div class="info-right">04.67.77.80.88</div>
				</div>
				<div class="info-date-tele">
					<div class="info-left">Courrier</div>
					<div class="info-right">aTraversChamps@gmail.com</div>
				</div>
			</div>
			<div class="info-sp">

			</div>
			<div class="info-map">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NrxuVcEXdK2R0K7DO04XtsL_2ic2EaiG" width="400" height="300"></iframe>
			</div>
		</div>
	</div>
        </article>
        <?php
            include("footer.php");
        ?>

    </body>
</html>