<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="title"></div>
        </header>
        <div style="height: 2%;"></div>
        <nav>
            <a href="index.html"><div class="onglet">Accueil</div></a>
            <div class="hr"></div>
            <div class="onglet">
                <a href="#">Epreuve</a>
                <div class="ongletDrop" id="listeDesEpreuves">
                    <a href="epreuve.html">Evaluer</a>
                    <a href="liste_epreuve.php">Liste des épreuves</a>
                </div>
            </div>
            <div class="hr"></div>  
            <div class="onglet" id="ongletBilan"> <a href="">Bilan</a>
                <div class="ongletDrop" id="consulterMoyenne">
                    <a href="bilan_apprenant.php">Bilan apprenant</a>
                    <a href="bilan_intervenant.php">Bilan intervenant</a>
                    <a href="moyenne.php">Consulter moyenne</a>
                </div>
            </div>
        </nav>
        <article>
            <div class="titleEpreuve">        
                <h1>Créer une épreuve</h1>
            </div>
            <div id="ensemble_creer_epreuve">

                <span class="span_preparer_epreuve_date">
                    Date
                    <input type="date" class="input_preparer">
                </span> 
                <span class="span_preparer_epreuve_nom">
                    Nom de l'&eacute;preuve 
                    <input type="text" class="input_preparer">
                </span>
                <span class="span_preparer_epreuve_classe">
                    Classe
                    <select class="input_preparer">
                        <option value=""></option>
                        <option>UneClasse</option>
                        <option>UneAutreClasse</option>
                    </select>
                </span>
                <span class="span_preparer_epreuve_matiere"> 
                    Matiere
                    <select class="input_preparer">
                        <option value=""></option>
                        <option>UneMatiereASelectionner</option>
                        <option>UneAutreMatiere</option>
                    </select>
                </span>
            </div>
            <p></p>
            <div class="cell_tab_cpt">
                <table class="tab_Prepa_Cpt" border="1">
                    <tr>
                        <th style="height: 50px;">Liste des compétences
                            <div class="checkbox_right">
                                <input type="search" placeholder="Rechercher" id="search_prepa">
                            </div>
                        </th>

                    </tr>
                    <tr>
                        <td>C1
                            <div class="checkbox_right">
                                <input type="checkbox">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>C2
                            <div class="checkbox_right">
                                <input type="checkbox">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>C3
                            <div class="checkbox_right">
                                <input type="checkbox">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>C4
                            <div class="checkbox_right">
                                <input type="checkbox">
                            </div>
                        </td>
                    </tr>
                    <td>C5
                        <div class="checkbox_right">
                            <input type="checkbox">
                        </div>
                    </td>
                </table>
            </div>
            <div class="espacer"></div>
            <div id="bouton_tab_prepa">   
                <input type="button" value="Creer epreuve">
            </div>
        </article>
    </body>
</html>