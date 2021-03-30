<?php


Class Voiture {
    
    private $couleur;
    private $marque;
    private $immat;

    function __construct($immat = NULL, $marque = NULL, $couleur = NULL) {
        if (!is_null($immat) && !is_null($marque) && !is_null($couleur) ) {
            $this->setImmat($immat);
            $this->setCouleur($couleur);
            $this->setMarque($marque);
        } else {
            
        }
        
    }

    //GETTERS
    public function getCouleur() {
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
}

?>