<?php
$db = new PDO("mysql:host=localhost;dbname:apprenants", "root","");
$allusers = $db->query('SELECT * FROM liste ORDER BY id DESC');
if (isset($_GET['recherche']) && !empty($_GET['recherche'])){
 $recherche = htmlspecialchars ($_GET['search']);
 $allusers = $db->query('SELECT nom FROM liste WHERE nom like"% '.$recherche.'%" ORDER BY id DESC');
 
}


?>

<section>
<?php
if($allusers-> rowCount() > 0){
  while($user * $allusers->fetch()){
    ?>
    <p>
      <?= $user['nom']; ?>
    </p>
    <?php
  }
} else {
  ?>
  <p>oups!!!!</p>
  <?php
}

?>
</section>


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
				<a class="navbar-brand simplon " href="#"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
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
							<a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/liste.php">LISTE</a>
						  </li>
					  </ul>
				 </div>
				  <form class="form-inline my-2 my-lg-0" action="liste.php" method="GET">
					<input class="form-control mr-sm-2 ipad" type="search" placeholder="Search" aria-label="Recherche" id="Recherche" name="recherche" >
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Recherche</button>
				  </form>
				</div>
        </nav> 
        
		</header>

		<div class="container-fluid fond">
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-5 text-uppercase font-weight-bold text-white">
                        <h1>Liste des Apprénants</h1>
                    </div>
                </div>
                <!--ici on place la liste-->
                <div class="container">
                  <table class="table table-fixed">
                    <thead>
                      <tr>
                        <th class="col-xs-2">First Name</th>
                        <th class="col-xs-2">Last Name</th>
                        <th class="col-xs-2">E-mail</th>
                        <th class="col-xs-2">First Name</th>
                        <th class="col-xs-2">Last Name</th>
                        <th class="col-xs-2">E-mail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                      <tr>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                        <td class="col-xs-2">John</td>
                        <td class="col-xs-2">Doe</td>
                        <td class="col-xs-2">johndoe@email.com</td>
                      </tr>
                    </tbody>
                  </table>
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