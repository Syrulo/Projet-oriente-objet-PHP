<?php

namespace App\Services;

class Utils{

    const DB_HOST = "localhost";
    const DB_NAME = "mvc_php";
    const DB_USER = "root";
    const DB_PASS = "motdepassrootquimarche";

    // Fonction de connection
    // static function connectDB()
    // {
    //     $db = false;
    //     try {
    //     $db = new PDO('mysql:host='.self::DB_HOST.';dbname='.self::DB_NAME, 'root', '');
    // } catch (PDOException $e) {
    //     $error = $e;
    //      // tenter de réessayer la connexion après un certain délai, par exemple
    //         echo "Hum problème de connexion au serveur de base de données".$e;
    //     }
    //     return $db;
    // }

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