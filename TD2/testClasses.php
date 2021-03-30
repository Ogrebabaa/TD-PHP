<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'Model.php';
require_once 'Trajet.php';
require_once 'Utilisateur.php';

$allUtils = Utilisateur::getAllUtilisateurs($pdo);
foreach($allUtils as $utilisateur) {
    echo "<br>";
    $utilisateur->afficher();
    echo "<br>";
}

$allTrajets = Trajet::getAllTrajets($pdo);

foreach($allTrajets as $trajet) {
    echo "<br>";
    $trajet->afficher();
    echo "<br>";
}

?>