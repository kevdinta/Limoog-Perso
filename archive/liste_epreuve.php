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
            <div style="font-size:12px;  font-style : italic;">
                Voici la liste des épreuves que vous avez créées. Vous pouvez ajouter, modifier ou supprimer à tout moment une épreuve spécifique.
            </div>
            <br>
            <center>
                <div>Classe 
                    <select class="select_class">
                        <option value=""></option>
                        <option>BTS SN option IR</option>
                    </select>
                    Matiere
                    <select>
                        <option value=" "></option>
                        <option>Français</option>
                        <option>Mathématiques</option>
                        <option>Informatique</option>
                    </select>
                    Epreuve
                    <select>
                        <option value=''></option>
                        <option>Epreuve 1</option>
                    </select>
                </div>
            </center>
            <div style="height: 5%;"></div>
            <table border="1" id="liste_epreuve_tab">
                <th colspan="3" style="border: 1px solid; border-radius: 8px 8px 0px 0px;">Liste des épreuves <a href="preparer_epreuve.php">
                        <input type="button" value='+' style="float: right;">
                    </a>
                </th>
                <tr>
                    <td id="cell_search">
                        <input id="search_epreuve" type="search" placeholder="Rechercher..." >
                    </td>
                    <td>Date</td>
                    <td>Modifier/Supprimer</td>
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
            <div style="height:5%"></div>
            <center><input type="submit" value="Supprimer"></center>
        </div>
    </article>
</body>
</html>