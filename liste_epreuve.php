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
            <div style="font-size:12px;  font-style : italic;">
                Voici la liste des épreuves que vous avez créées. Vous pouvez ajouter, modifier ou supprimer à tout moment une épreuve spécifique.
            </div>
            <br>

            <div id="ensemble_select_epreuve">
                <span class="span_class">
                    Classe 
                    <select class="select_class">
                        <option value=""></option>
                        <option>BTS SN option IR</option>
                    </select>
                </span>
                <span class="span_matiere">
                    Matiere
                    <select class="select_matiere">
                        <option value=" "></option>
                        <option>Français</option>
                        <option>Mathématiques</option>
                        <option>Informatique</option>
                    </select>
                </span>
                <span class="span_epreuve">
                    Epreuve
                    <select class="select_epreuve_liste">
                        <option value=''></option>
                        <option>Epreuve 1</option>
                    </select>
                </span>
            </div>
            <div style="height: 5%;"></div>
            <div id="tab_cell_epreuve">
                <table border="1" id="liste_epreuve_tab">
                    <th id="title_Epreuve" colspan="3">Liste des épreuves <a href="preparer_epreuve.php">
                            <input type="button" value='+' style="float: right;">
                        </a>
                    </th>
                    <tr>
                        <td id="cell_search">
                            <input id="search_epreuve" type="search" placeholder="Rechercher..." >
                        </td>
                        <td>Date</td>
                        <td id="modifier_suppr"></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="liste_epreuve">Epreuve 1</span>                    
                        </td> 
                        <td></td>
                        <td>
                            <div class="img_epreuve">
                                <input type="checkbox"> 
                                <a href="modifier_epreuve.php">
                                    <img style="width:20px;height:20px;" src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                                </a>
                            </div>                    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="liste_epreuve">Epreuve 2</span>
                        </td>
                        <td></td>
                        <td>
                            <div class="img_epreuve">
                                <input type="checkbox"> 
                                <a href="modifier_epreuve.php">
                                    <img style="width:20px;height:20px;" src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="liste_epreuve">Epreuve 3</span>                 
                        </td>
                        <td></td>
                        <td>
                            <div class="img_epreuve">
                                <input type="checkbox"> 
                                <a href="modifier_epreuve.php">
                                    <img style="width:20px;height:20px;" src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="height:5%"></div>
            <center><input type="submit" value="Supprimer"></center>

        </article>
    </body>
</html>