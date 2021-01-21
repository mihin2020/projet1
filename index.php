<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../simplon/img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../simplon/styles/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen and (max-width : 568px)" href="../simplon/styles/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<title>Acceuil</title>
</head>
<body>
	<div>
		<header>
			
		<?php
	
			include ('entete.php');
		?>

		</header>

		<div class="container-fluid fond">
			<div class="container m-auto">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5">
						<div class="reduction">
							<img src="../simplon/img/bn1.png" alt="" width="400px" height="450px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 ">
						<div>
							<div class="mt-5 ml-1">
								<h1 class="display-4  text-white font-weight-bold  taille1">SIMPLON BURKINA,<br>Reseau de Fabrique <br> <span> Numérique.</span></h1>
							</div>
							<div class="mt-5 ">
								<p class="taille text-white font-weight-bold taille2">Simplon Burkina propose des formations gratuites et inclusives aux métiers techniques du numérique</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row my-5">
				<div class="col-md-3 center espace">
					<img src="img/pat1.png" alt="" height="175px">
				</div>
				<div class="col-md-3 center espace">
					<img src="img/pat2.jfif" alt="" height="175px">
				</div>
				<div class="col-md-3 center espace">
					<img src="img/pat3.png" alt=""height="175px" width="250px" >
				</div>
				<div class="col-md-3 center espace">
					<img src="img/pat4.png" alt="" width="300px" height="150px">
				</div>
			</div>
		</div>

		<footer>
		
		<?php include ('pied.php');
		?>

		</footer>
	
	</div>


	<script src="../simplon/js/jquery-3.5.1.min.js"></script>
	<script src="../simplon/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../simplon/js/app.js"></script>
</body>
</html>