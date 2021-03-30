<?php

Class Utilisateur {

    private $login;
    private $nom;
    private $prenom;

    public function __construct($login = NULL, $nom = NULL, $prenom = NULL) {
        if (!is_null($login) && !is_null($nom) && !is_null($prenom) ) {
            $this->login = $login;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    }

    // --------------------------------------------------------------------------- 
    // GETTERS
    // --------------------------------------------------------------------------- 

    public function getLogin() {
        return $this->login;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    // --------------------------------------------------------------------------- 
    // SETTERS
    // --------------------------------------------------------------------------- 

    public function setLogin($p_login) {
        $this->login = $p_login;
    }

    public function setNom($p_nom) {
        $this->login = $p_nom;
    }

    public function setPrenom($p_prenom) {
        $this->login = $p_prenom;
    }

    public function afficher() {
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        $login = $this->getLogin();
        echo "Nom: $nom, Prénom: $prenom, Login: $login";
    }
}

?>