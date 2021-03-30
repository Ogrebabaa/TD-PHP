<?php

Class Trajet {

    private $id;
    private $pt_depart;
    private $pt_arrive;
    private $date;
    private $nbPlaces;
    private $prix;
    private $conducteur_login;

    public function __construct($data = NULL) {

        if ( !is_null($data)) {
            $this->id = $data["id"];
            $this->pt_depart = $data["pt_depart"];
            $this->pt_arrive = $data["pt_arrive"];
            $this->date = $data["date"];
            $this->nbPlaces = $data["nbPlaces"];
            $this->prix = $data["prix"];
            $this->conducteur_login = $data["conducteur_login"];
        }
        
    }

    // --------------------------------------------------------------------------- 
    // GETTERS
    // --------------------------------------------------------------------------- 

    public function __get($property) {

        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // --------------------------------------------------------------------------- 
    // SETTERS
    // --------------------------------------------------------------------------- 

    public function __set($property, $value) {

        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    // --------------------------------------------------------------------------- 
    // METHODES
    // --------------------------------------------------------------------------- 
    
    static public function getAllTrajets($pdo) {
        $rep = $pdo->query("SELECT * FROM trajet");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_trajet = $rep->fetchAll();

        return $tab_trajet;
    }

    public function afficher() {
        $vars = get_class_vars('Trajet');

        foreach($vars as $key => $value) {
            echo "$key : {$this->$key} ";
        }
    }
}



?>