<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Liste des voitures</title>
</head>
<body>
<?php
echo "<ul>";
foreach ($tab_v as $v) {
    echo '
    <li>
        <a href="routeur.php?action=read&immat=' . $v->getImmat() . '"> Voiture d\'immatriculation ' . $v->getImmat() . '.</a>
    </li>';
}   
echo "</ul>";
?>
</body>
</html>