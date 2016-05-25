<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css"  media="screen and (min-width: 985px)"  href="css/style.css">
        <link rel="stylesheet" type="text/css"  media="screen and (max-width: 360px)"  href="css/test.css">
    </head>
    <body>
        <header>
            <div class="title">LIMOOG</div>
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
            <label style="float: right;">Prof_XXX</label>
            <div class="espacer"></div>
            <fieldset>
                <legend>Préparer une épreuve</legend>
                <p></p>
                <span>Date
                    <input type="date">
                </span> 
                <p></p>
                <span>
                    Nom de l'&eacute;preuve <input type="text">
                </span>
                <p></p>
                <span>Classe<select>
                        <option value=""></option>
                        <option>UneClasse</option>
                        <option>UneAutreClasse</option>
                    </select>
                </span>
                <p></p>
                <span> Matiere
                    <select>
                        <option value=""></option>
                        <option>UneMatiereASelectionner</option>
                        <option>UneAutreMatiere</option>
                    </select>
                </span>
                <p></p>
                <div class="cell_tab_cpt">
                    <table class="tab_Prepa_Cpt" border="1">
                        <tr>
                            <th style="height: 50px;">Liste des compétences
                        <div class="checkbox_right">
                            <input type="search" placeholder="Rechercher" style="width: 300px;">
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
            </fieldset>
        </article>
    </body>
</html>