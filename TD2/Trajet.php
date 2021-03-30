<?php

Class Trajet {

    private $id;
    private $pt_depart;
    private $pt_arrive;
    private $date;
    private $nbPlaces;
    private $prix;
    private $conducteurLogin;

    public function __construct($data) {

        if (!empty($data)) {
            $this->id = $data["id"];
            $this->pt_depart = $data["pt_depart"];
            $this->pt_arrive = $data["pt_arrive"];
            $this->date = $data["date"];
            $this->nbPlaces = $data["nbPlaces"];
            $this->prix = $data["prix"];
            $this->conducteurLogin = $data["conducteurLogin"];
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
    
}



?>