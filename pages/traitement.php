<?php

require_once 'connexion.php'; //permet de connecter premierement a la base de donnée

$NOM = $_POST['NOM'];//$_POST variable globale ou super globale
$PRENOM = $_POST['PRENOM'];
$NAISSANCE = $_POST['NAISSANCE'];
$ADRESSE = $_POST['ADRESSE'];
$TELEPHONE = $_POST['TELEPHONE'];
$EMAIL = $_POST['EMAIL'];

$preparation = $db -> prepare('INSERT INTO liste(NOM, PRENOM, NAISSANCE, ADRESSE, TELEPHONE, EMAIL) VALUES(?, ?, ?, ?, ?, ?)');
 //?=il yaura un remplacement des valeurs  de point d'interrogation par les valeurs nom, prenom,naissance
//$preparation -> bindParam(':nom', $nom);
//$preparation -> bindParam(':nom', $prenom);
//$preparation -> bindParam(':nom', $naissance);

$preparation -> execute(array($NOM, $PRENOM, $NAISSANCE, $ADRESSE, $TELEPHONE, $EMAIL));// ce ci est appeler une requette preparer et il est un tableau
$data = array($NOM, $PRENOM, $NAISSANCE, $ADRESSE, $TELEPHONE, $EMAIL);
$preparation -> execute($data);
?>