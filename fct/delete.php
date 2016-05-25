<?php

function delete()
{
    $conn_string = "host=127.0.0.1 port=5432 dbname=postgres user=postgres password=postgres"; // lire un fichier de connexion
    $connexion = pg_connect($conn_string);
    // $query = Faire la requête
    $resultat = pg_query($connexion, $query);
    $row = pg_fetch_array($resultat) ;
}
