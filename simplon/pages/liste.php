<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../styles/liste.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<title>liste</title>
</head>
<body>
	<div>
		<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-white ">
				<a class="navbar-brand simplon " href="index.php"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
				 <div class="">
					<ul class="navbar-nav">
						<li class="nav-item ">
							<a class="nav-link mr-5 font-weight-bold text-danger" href="../index.php">ACCEUIL</a>
						  </li>
						<li class="nav-item ">
						  <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/enregister.php">S'ENREGISTRER</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/recherche.php">RECHERCHER</a>
						  </li>
					  </ul>
				 </div>

				  </form>
				</div>
        </nav> 
        
		</header>



		<div class="container-fluid fond">
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-5 text-uppercase font-weight-bold text-danger">
                        <h1>Liste des Apprénants</h1>
                    </div>
                </div>


                <?php
    $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $bd->query("SELECT * FROM liste ORDER BY NOM ASC");

    if (!$result){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result->rowCount();
        ?>

        <h4 class="text-center text-uppercase text-danger">La table comprend <?= $nbre ?> personnes enregistrées</h4>
       <table class="m-auto">
       <tr class="border bg-white">
            <th class="text-center text-uppercase">nom</th>
            <th class="text-center text-uppercase">prenom &nbsp;</th>
            <th class="text-center text-uppercase">naissance</th>
            <th class="text-center text-uppercase">adresse</th>
            <th class="text-center text-uppercase">telephone</th>
            <th class="text-center text-uppercase">email</th>
        </tr>

        <?php
    while($ligne = $result->fetch()){
      
        echo"<tr>";
        echo"<td>".$ligne["NOM"]."</td>";
        echo"<td>".$ligne["PRENOM"]."</td>";
        echo"<td>".$ligne["NAISSANCE"]."</td>";
        echo"<td>".$ligne["ADRESSE"]."</td>";
        echo"<td>".$ligne["TELEPHONE"]."</td>";
        echo"<td>".$ligne["EMAIL"]."</td>";
        echo"</tr>";
    }
?>
       </table>
       <?php  
    }
?>
                </div>
            </div>
    </div>
    

            

		<footer>
    <?php include ('pied.php') ; ?>
    </footer>
	
	</div>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../simplon/js/app1.js"></script>
</body>
</html>