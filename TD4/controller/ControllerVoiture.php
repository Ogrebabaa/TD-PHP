<?php
    
    require_once ('../model/ModelVoiture.php'); // chargement du modèle

    class ControllerVoiture {

        public static function readAll() {
            $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
            require ('../view/voiture/list.php'); //"redirige" vers la vue
        }

        public static function read($immat) {
            $v = ModelVoiture::getVoitureByImmat($immat); //appel au modèle pour gerer la BD
            if (!empty($v)) {
                require ('../view/voiture/detail.php'); //"redirige" vers la vue
            } else {
                require ('../view/voiture/error.php'); //"redirige" vers la vue
            }
            
        }

        public static function create() {
            
            require ('../view/voiture/create.php'); //"redirige" vers la vue
            
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