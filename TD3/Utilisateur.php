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

    // --------------------------------------------------------------------------- 
    // METHODES
    // --------------------------------------------------------------------------- 
    
    static public function getAllUtilisateurs($pdo) {
        $rep = $pdo->query("SELECT * FROM utilisateur");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $tab_utils = $rep->fetchAll();

        return $tab_utils;
    }

    static public function findTrajets($login, $pdo) {
        $sql = "SELECT * FROM trajet T
                INNER JOIN passager P ON P.trajet_id = T.id
                INNER JOIN utilisateur U ON U.login = P.utilisateur_login
                WHERE U.login = :login";
        $req_prep = $pdo->prepare($sql);
        $values = array(
        "login" => $login,
        );
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_util = $req_prep->fetchAll();

        return $tab_util;
    } 
    
}

?>