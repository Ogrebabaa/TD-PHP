<?php
require_once('Voiture.php');
$q_marque = $_POST["marque"];
$q_couleur = $_POST["couleur"];
$q_immat = $_POST["immat"];
$voiture1 = new Voiture($q_immat, $q_marque, $q_couleur);
$voiture1->afficher();
//methode post visible dans l'onglet network de la console dev du navigateur
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test voiture</title>
</head>
<body>
    
</body>
</html>