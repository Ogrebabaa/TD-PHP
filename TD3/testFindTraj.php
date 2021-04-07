<?php

require_once "Trajet.php";
require_once "Utilisateur.php";
require_once "Model.php";


if (isset($_POST["login"])) {
    $login = $_POST["login"];
    $tab_trajet = Utilisateur::findTrajets($login, $pdo);

    foreach($tab_trajet as $trajet) {
        $trajet->afficher();
    }
}  







?>