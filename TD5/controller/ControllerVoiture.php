<?php
    
    require_once(File::build_path(array("model","ModelVoiture.php")));

    class ControllerVoiture {

        public static function readAll() {
            $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
            require(File::build_path(array("view","voiture", "list.php")));
        }

        public static function read($immat) {
            $v = ModelVoiture::getVoitureByImmat($immat); //appel au modèle pour gerer la BD
            if (!empty($v)) {
                require(File::build_path(array("view","voiture", "detail.php")));
            } else {
                require(File::build_path(array("view","voiture", "detail.php")));
            }
            
        }

        public static function create() {
            
            require(File::build_path(array("view","voiture", "create.php")));
            
        }

        public static function created() {
            
            $data = [
                "immat" => $_GET["immat"],
                "marque" => $_GET["marque"],
                "couleur" => $_GET["couleur"]
            ];

            $v = new ModelVoiture($data["immat"],$data["marque"],$data["couleur"]);
            $v->save();
            Self::readAll();
            
        }

        public static function delete() {
            $immat = $_GET["immat"];
            ModelVoiture::delete($immat);
            
            Self::readAll();
            
        }
    }
?>