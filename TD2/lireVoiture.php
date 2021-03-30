<?php

require_once "Model.php";
require_once "../TD1/Voiture.php";

//Ex 6
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

//Ex 7
$rep = $pdo->query("SELECT * FROM voiture");
$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
$tab_voit = $rep->fetchAll();

foreach($tab_obj as $key => $value) {
    echo "Immatriculation :".$value->immat;
    echo "<br>";
    echo "Marque :".$value->marque;
    echo "<br>";
    echo "Couleur :".$value->couleur;
    echo "<br>";
}
?>