<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

    require_once(File::build_path(array("controller","ControllerVoiture.php")));

    // On recupère l'action passée dans l'URL
    $action = $_GET["action"];
    // Appel de la méthode statique $action de ControllerVoiture
    if ($action == "read") {
        $immat = $_GET["immat"];
        ControllerVoiture::$action($immat);
    } else {
        ControllerVoiture::$action(); 
    }
    
?>