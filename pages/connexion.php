<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=apprenants","root", '');
}catch(Exception $e) {
        die('Erreur:'.$e -> getMessage());
    }
?>