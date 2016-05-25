<?php

function connexion() //permet la connexion à la BDD
{
    //Emplacement du fichier de la base de données
    $fichier = "/inc/Database.ini";
    //copie le fichier dans un tableau
    $array = parse_ini_file($fichier);
    //définit des variables en fonction du tableau
    $host = $array['host'];
    $port = $array['port'];
    $dbname = $array['dbname'];
    $user = $array['user'];
    $password = $array['password'];
    //Chaine de connexion à la Base de données
    $connexionString = "host=" . $host . " port=" . $port . " dbname=" . $dbname . " user=" . $user . " password=" . $password ;
    //Connexion
    $connexion = pg_connect($connexionString);
    return $connexion;
}