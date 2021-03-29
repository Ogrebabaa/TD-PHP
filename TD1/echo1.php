<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP i'm databyte</title>
</head>
<body>
    <?php
        $toto = "Yo les potes.";
        echo $toto;

        $prenom = "Marc";
        echo "<br>";
        echo "Bonjour ". $prenom ;
        echo "<br>";
        echo "Bonjour $prenom";
        echo "<br>";
        echo 'Bonjour $prenom';
        echo "<br>";
        echo $prenom;
        echo "<br>";
        echo "$prenom" ;

        //Ex 4
        $marque = "Rover";
        $immat = "123DF32";
        $couleur = "Blouge";

        echo "<p> Votre voiture $immat de marque $marque (couleur $couleur)";

        //Ex 5
        $voiture = [
            "marque" => "Rover",
            "immat" => "123DF32",
            "couleur" => "Blouge"
        ];
        echo "<br>";
        var_dump($voiture);

        echo "<p> Votre voiture {$voiture["immat"]} de marque {$voiture["marque"]} (couleur {$voiture["couleur"]})";
        
        $voitures = [
            0 => $voiture,
            1 => [
                "marque" => "Renault",
                "immat" => "133ZF96",
                "couleur" => "Poussin"
            ],
            2 => [
                "marque" => "Lexus",
                "immat" => "321DR39",
                "couleur" => "Vaune"
            ],
            3 => [
                "marque" => "Citroen",
                "immat" => "823NH62",
                "couleur" => "Pivoine"
            ],
            4 => [
                "marque" => "Alfa Romeo",
                "immat" => "873LF12",
                "couleur" => "Violeu"
            ]
        ];
        echo "<br>";
        echo "<br>";
        print_r($voitures);
        echo "<br>";
        echo "
        <h1> Liste des voitures : </h1>
        <ul>
        ";
            if(empty($voitures)) {
                echo "<p>Il n'y a aucune voiture.</p>";
            } else {
                foreach($voitures as $key => $value) {
                    $cur_marque = $value["marque"];
                    $cur_couleur = $value["couleur"];
                    $cur_immat = $value["immat"];
                    echo "<li>$key: Voiture $cur_immat de marque $cur_marque (couleur $cur_couleur)</li>";
                }
            }

        echo "
        </ul>";

    ?>
</body>
</html>