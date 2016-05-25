<?php
require_once 'connexion.php';

function selectInEpreuve()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tEpreuves; ';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}

function selectInCompetences()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tCompetences; ';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}

function selectInMatiere()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tMatieres; ';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}

function selectInGroupes()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tGroupes; ';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}

function selectInEleves()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tUsagers; ';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}

function selectInInclure()
{
    $result = array();
    $connexion = connexion();
    $query = 'SELECT * FROM tInclure;';
    $executeQuery = pg_query($connexion, $query);
    while($row = pg_fetch_array($executeQuery))
    {
        $result[] = $row;
    }
    return $result;
}