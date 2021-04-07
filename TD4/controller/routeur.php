<?php
    require_once 'ControllerVoiture.php';
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