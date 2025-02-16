<?php

namespace App\Services;

class Utils{

    // Fonction de debug simple
    static function dump($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }  

    // Fonction de debug avec un die
    static function dump_die($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
        die;
    }

    // Fonction pour éviter d'ecrire les htmlentities et les stip_tags des input
    static function inputCleaner($input){
        $string = htmlentities((strip_tags($input)));
        return $string;
    }

}