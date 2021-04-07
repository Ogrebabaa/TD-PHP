<?php

require_once "Model.php";
require_once "Voiture.php";

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

echo "<br>";
//Ex 7
// $rep = $pdo->query("SELECT * FROM voiture");
// $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
// $tab_voit = $rep->fetchAll();

//Ex 8
$tab_voit = Voiture::getAllVoitures($pdo);

foreach($tab_voit as $key => $value) {
    $value->afficher();
    echo "<br>";
}

//td3 ex1
$voitureTest = Voiture::getVoitureByImmat("133ZF96",$pdo);
var_dump($voitureTest);

//Ex 2
$testSave = new Voiture("666ZZ66", "Bentley", "Nouge");
echo $testSave->getCouleur();
// $testSave->save($pdo);

//Ex 3

?>