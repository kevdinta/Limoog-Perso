<?php
require_once 'connexion.php';

function insertInEpreuve($nomEpreuves, $dDate, $iGroupe)
{
    $connexion = connexion();
    $query = "INSERT INTO tEpreuves (cNomEpreuve, dDate, iGroupe) "
            . "Values ('" . $nomEpreuves . "', '" . $dDate . "', '". $iGroupe ."') returning iId;";
    $executeQuery = pg_query($connexion, $query);
}

function insertInCompetences($nomCompetences, $iMatiere)
{   
    $connexion = connexion();
    $query = "INSERT INTO tcompetences (cNom, iMatiere) "
             . "Values ('". $nomCompetences . "', '" . $iMatiere. "') returning iId;";
    $executeQuery = pg_query($connexion, $query);
}

function insertInInclure($iEpreuve, $iCompetence)
{
    $result = array();
    $connexion = connexion();
    $test = 'SELECT count(*) FROM tInclure Where iEpreuve = ' . $iEpreuve . 'And iCompetence = ' . $iCompetence . ';';
    $executeTest = pg_query($connexion, $test);
    while($row = pg_fetch_array($executeTest))
    {
        $result[] = $row;
    }
    
    if($result[0][0] == 0)
    {
        $query = "INSERT INTO tInclure (iEpreuve, iCompetence) "
             . "Values (" . $iEpreuve . ", " . $iCompetence . ");";
        $executeQuery = pg_query($connexion, $query);
    }
}