function ajouterLigneDiscipline()
{
    var tableau = document.getElementById("tableau");
    var ligne = tableau.insertRow(-1);//on a ajouté une ligne
    var colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
    var nbLignes = document.getElementById("tableau").rows.length;
    //colonne1.innerHTML += document.getElementById("discipline").value + '-' + (nbLignes - 1);

    if (document.getElementById("discipline").value == "Maths")
    {
        alert("test");
        colonne1.innerHTML += document.getElementById("discipline").value + '-' + (nbLignes - 1);
    }
   else if (document.getElementById("discipline").value == "Maths")
    {
        alert("existe");
    }
}

function ajouterLigneCompetence()
{
    var tableau = document.getElementById("tableau2");
    var ligne = tableau.insertRow(-1);//on a ajouté une ligne
    var colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
    var nbLignes = document.getElementById("tableau2").rows.length;
    colonne1.innerHTML += document.getElementById("competence").value + '-' + (nbLignes - 1);//on y met le contenu de cpt
}
function supprimer()
{
    //document.getElementById("tableau").deleteRow(id); // on supprime la ligne 
    var n;

    // on r�cup�re l'identifiant (id) de la table qui sera modifi�e
    var tableau = document.getElementById("tableau");
    // nombre de lignes dans la table (avant suppression de la ligne n)
    var nbLignes = tableau.rows.length;

    n = prompt("Numero de la ligne a supprimer ?\nEntrez une valeur entre 0 et " + (nbLignes - 1));

    if (n < 0 || n > (nbLignes - 1))
    {
        alert("Erreur, valeur incorrecte");
        return;
    }
    if (tableau.rows.length)
    {
        tableau.deleteRow(n);
    }
}
function supprimerCompetence()
{
    //  document.getElementById("tableau2").deleteRow(id); // on supprime la ligne    
    var n;

    // on r�cup�re l'identifiant (id) de la table qui sera modifi�e
    var tableau = document.getElementById("tableau2");
    // nombre de lignes dans la table (avant suppression de la ligne n)
    var nbLignes = tableau.rows.length;

    n = prompt("Numero de la ligne a supprimer ?\nEntrez une valeur entre 0 et " + (nbLignes - 1));

    if (n < 0 || n > (nbLignes - 1))
    {
        alert("Erreur, valeur incorrecte");
        return;
    }
    if (tableau.rows.length)
    {
        tableau.deleteRow(n);
    }
 function afficher()
 {
     var div;
     div = document.getElementById("tabCpt");
     div.style.visibility = "visible";
 }
}

