<?php

Class File {
    public static function build_path($path_array) {
        // $ROOT_FOLDER (sans slash à la fin) vaut
        // "/home/ann2/votre_login/public_html/TD5" au Campus
        $ROOT_FOLDER = "/home/moreauv/public_html/tp_slam5_revision/TD-PHP/TD5";
        return $ROOT_FOLDER. '/' . join('/', $path_array);
    }
}


?>