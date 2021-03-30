<?php

require_once "Model.php";
$rep = $pdo->query("SELECT * FROM voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

foreach($tab_obj as $key => $value) {
    echo "Immatriculation :".$value->immat;
    echo "<br>";
    echo "Marque :".$value->marque;
    echo "<br>";
    echo "Couleur :".$value->couleur;
    echo "<br>";

}

?>