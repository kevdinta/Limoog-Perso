<?php
require_once 'insert.php';
require_once 'select.php';
require_once 'connexion.php';

$nomEpreuves = 'Ceasar Zeppeli';
$iMatiere = 1;
$iGroupe = 1;
$dDate = "3569-02-20";
$nomCompetences = 'Shabon Launcher';
$iCompetences = 11;
$iEpreuve = 9;
$chalachiasse = insertInInclure($iEpreuve, $iCompetences);

echo "test chalachiasse";

var_dump($chalachiasse);

//$chalavion = insertInEpreuve($nomEpreuves, $dDate, $iGroupe);
//$chalatest = insertInCompetences($nomCompetences, $iMatiere);
$chala = selectInInclure();
$chalaflute = selectInCompetences();
$chalalave = selectInEpreuve();

echo "competences";

foreach($chalaflute as $row)
{
    var_dump($row);
}

echo "epreuve";

foreach($chalalave as $row)
{
    var_dump($row);
}

echo "tInclure";

foreach($chala as $row) 
{
    var_dump($row);
}
