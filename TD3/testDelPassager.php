<?php

require_once "Trajet.php";
require_once "Utilisateur.php";
require_once "Model.php";


if (isset($_POST["trajet_id"]) && isset($_POST["login"])) {
    print_r($_POST);
    $trajet_id = $_POST["trajet_id"];
    $login = $_POST["login"];
    $data = [
        "trajet_id" => $trajet_id,
        "utilisateur_login" => $login
    ];
    Trajet::deletePassager($data, $pdo);

}  







?>