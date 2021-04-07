<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

Class Voiture {
    
    private $couleur;
    private $marque;
    private $immat;

    function __construct($immat = NULL, $marque = NULL, $couleur = NULL) {
        if (!is_null($immat) && !is_null($marque) && !is_null($couleur) ) {
            $this->setImmat($immat);
            $this->setCouleur($couleur);
            $this->setMarque($marque);
        } 
    }

    //GETTERS
    function getCouleur() {
        return $this->couleur;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getImmat() {
        return $this->immat;
    }

    //SETTERS
    public function setCouleur($newCouleur) {
        $this->couleur = $newCouleur;
    }

    public function setMarque($newMarque) {
        $this->marque = $newMarque;
    }
    
    public function setImmat($newImmat) {
        if (strlen($newImmat) > 8) {
            echo "l'immaticulation d'un véhicule ne doit pas dépasser 8 caractères";
        } else {
            $this->immat = $newImmat;
        }
    }

    // Other

    public function afficher() {
        $immat = $this->immat;
        $couleur = $this->couleur;
        $marque = $this->marque;

        echo "Voiture $immat de marque $marque (couleur $couleur)";
    }

    public function save($pdo) {
        $immat = $this->getImmat();
        $marque = $this->getMarque();
        $couleur = $this->getCouleur();

        try {
            $sql = "INSERT INTO voiture(immat, marque, couleur) VALUES (:immat, :marque, :couleur)";
            $req_prep = $pdo->prepare($sql);
            $values = [
                "immat" => $immat,
                "marque" => $marque,
                "couleur" => $couleur
            ];
            $req_prep->execute($values);
        } catch(PDOException $e) {

            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo "une erreur est survenue, <a href=\"\">retour à la page d'accueil </a>";
            }
        }
        

    }

    static public function getAllVoitures($pdo) {
        
        $rep = $pdo->query("SELECT * FROM voiture");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $rep->fetchAll();

        return $tab_voit;

    }

    static public function getVoitureByImmat($immat, $pdo) {
        
        $sql = "SELECT * from voiture WHERE immat=:nom_tag";
        // Préparation de la requête
        $req_prep = $pdo->prepare($sql);
        $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);
        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
        return false;
        return $tab_voit[0];
    }
}



?>