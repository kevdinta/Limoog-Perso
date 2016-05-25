<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="title"></div>
        </header>
        <nav>
            <a href="index.html"><div class="onglet">Accueil</div></a>
            <div class="hr"></div>
            <div class="onglet">
                <a href="#">Epreuve</a>
                <div class="ongletDrop">
                    <a href="epreuve.html">Evaluer</a>
                    <a href="liste_epreuve.php">Liste des épreuves</a>
                </div>
            </div>
            <div class="hr"></div>  
            <div class="onglet"> <a href="">Bilan</a>
                <div class="ongletDrop">
                    <a href="bilan_apprenant.php">Bilan apprenant</a>
                    <a href="bilan_intervenant.php">Bilan intervenant</a>
                    <a href="consulter_moyenne.php">Consulter sa moyenne</a>
                </div></div>
            <div class="hr"></div>
        </nav>
        <article>
            <div>
                <span>Matiere</span>
                <select>
                    <option value=""></option>
                    <option>Français</option>
                    <option>Economie</option>
                    <option>Informatique</option>
                </select>
                <span>Epreuve</span>
                <select>
                    <option value=""></option>
                    <option>Nom de l'épreuve 1</option>
                    <option>Nom de l'épreuve 2</option>
                </select>
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
                        <td></td>
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