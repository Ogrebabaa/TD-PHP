<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Détail de la voiture</title>
 </head>
 <body>
 <?php
    echo '<p> Voiture d\'immatriculation ' . $v->getImmat() . '.</p>';
    echo '<p> Voiture de couleur ' . $v->getCouleur() . '.</p>';
    echo '<p> Voiture de marque ' . $v->getMarque() . '.</p>';
 ?>
 </body>
</html>