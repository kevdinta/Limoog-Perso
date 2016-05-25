<?php
require_once '/select.php';

<<<<<<< HEAD
function ListeMatieres() {
    echo "<option id='1'>Mathematiques</option>
          <option>Français</option>
	  <option>Physique</option>";
=======
function ListeClasses()
{
    $classes = selectInGroupes();
    foreach ($classes as $row) 
        {
            echo "<option value='" . $row["iid"] . "'>" . $row["cnomgroupe"] . "</option>";
        }
>>>>>>> 162c5b226cc32d40c1b1a52ff659d8eeb62e56cc
}

function ListeMatieres() 
{
    echo "<option>Mathematiques</option>
    <option>Français</option>
	<option>Physique</option>";
}

function ListeEpreuves() 
{
    echo" <option>Epreuve 1</option>
                <option>Epreuve 2</option>
                <option>Epreuve 3</option>
                <option>Epreuve 4</option>";
}

function ListeEtudiants() 
{
    echo "   <option>Etudiant 1</option>
             <option>Etudiant 2</option>";
}

