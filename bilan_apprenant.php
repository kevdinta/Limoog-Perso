<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width" />
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
            <div id="ensemble_bilan">
                <span class="span_matiere_bilan">
                    Matiere
                    <select id="matiere_bilan">
                        <option value=""></option>
                        <option>Français</option>
                        <option>Economie</option>
                        <option>Informatique</option>
                    </select>
                </span>
                <span class="span_epreuve_bilan">
                    Epreuve
                    <select id="epreuve_bilan">
                        <option value=""></option>
                        <option>Nom de l'épreuve 1</option>
                        <option>Nom de l'épreuve 2</option>
                    </select>
                </span>
            </div>
            <div class="espacer"></div>
            <div>
                <table border="1" id="tab_compare_I_A" >
                    <tr>
                        <td id="search_bilan_cpt_cell" colspan="3">
                            <input type="search" id="search_bilan_cpt" placeholder="Rechercher une compétence...">
                        </td>
                    </tr>
                    <tr>
                        <td id="td_vide_bilan"></td>
                        <th class="th_apprenant"></th>
                        <th class="th_intervenant"></th>
                    </tr>
                    <tr>
                        <th>Compétence 1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Compétence 2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Compétence 3</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Compétence 4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Compétence 5</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </article>
    </body>
</html>