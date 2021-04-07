<?php

require_once "Trajet.php";
require_once "Utilisateur.php";
require_once "Model.php";


if (isset($_POST["trajet_id"])) {
    $trajet_id = $_POST["trajet_id"];
    $tab_util = Trajet::findPassagers($trajet_id, $pdo);

    foreach($tab_util as $util) {
        $util->afficher();
    }
}  







?>