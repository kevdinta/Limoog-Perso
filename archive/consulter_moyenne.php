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
                    <a href="consulter_moyenne.php">Consulter sa moyenne</a>
                </div>
            </div>
        </nav>
        <article>
            <span>Matiere
                <select>
                    <option value=""></option>
                    <option>Français</option>
                    <option>Maths</option>
                </select>
            </span>
            <p></p>
            <span>
                Nom de l'epreuve
                <input type="search" placeholder="Rechercher..."/>
            </span>
            <div class="espacer"></div>
            <!-- tabComparaisonApprenant sera dynamique et affichera la note en fonction des autres -->
            <div class="cell_tab_cpt">
                <table id="tabComparaisonApprenant" border='1'>
                    <tr>
                        <td colspan="5"><input type="search" placeholder="Rechercher..."></td>
                    </tr>
                    <tr>
                        <th>Compétence 1</th>

                        <td class='cell_note' style="background: red; opacity: 0.3;">1</td>
                        <td class='cell_note' style="background: orange; opacity: 0.3;">5</td>
                        <td class='cell_note' style="background: blue;">3</td>
                        <td class='cell_note' style="background: green; opacity: 0.3;">4</td>
                    </tr>
                    <tr>
                        <th>Compétence 2</th>
                        <td class='cell_note' style="background: red; opacity: 0.3;">2</td>
                        <td class='cell_note' style="background: orange; opacity: 0.3;">4</td>
                        <td class='cell_note' style="background: blue;">3</td>
                        <td class='cell_note' style="background: green; opacity: 0.3;">6</td>
                    </tr>
                    <tr>
                        <th>Compétence 3</th>
                        <td class='cell_note' style="background: red;">4</td>
                        <td class='cell_note' style="background: orange; opacity: 0.3;">2</td>
                        <td class='cell_note' style="background: blue; opacity: 0.3;">5</td>
                        <td class='cell_note' style="background: green; opacity: 0.3;">3</td>
                    </tr>
                    <tr>
                        <th>Compétence 4</th>
                        <td class='cell_note' style="background: red; opacity: 0.3;">12</td>
                        <td class='cell_note' style="background: orange;">4</td>
                        <td class='cell_note' style="background: blue; opacity: 0.3;">8</td>
                        <td class='cell_note' style="background: green; opacity: 0.3;">6</td>
                    </tr>
                </table>
                <div class='espacer'></div>
                <table id='total_tab' border='1'>
                    <tr>
                        <th>Total</th>
                        <td class='cell_note' style="background: red; height: 20px;">5</td>
                        <td class='cell_note' style="background: orange;">10</td>
                        <td class='cell_note' style="background: blue;">4</td>
                        <td class='cell_note' style="background: green;">6</td>
                    </tr>
                </table>
            </div>
            <p></p>
            <fieldset id="fieldset_moy">
                <legend>Légende</legend>
                Couleur opaque : Vous concerne.
                <br>
                Couleur transparent : Concerne les étudiants de votre classe. Les valeurs figurées sur les cases représentent le nombre d'apprenant ayant eu cette note.
            </fieldset>

        </article>
    </body>
</html>