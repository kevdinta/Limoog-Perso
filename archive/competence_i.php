<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/js_cpt.js"></script>
    </head>
    <body>
        <header>
            <div style="height: 5%;"></div>
            <div class="title"></div>
        </header>
        <div style="height: 2%;"></div>
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
                    <a href="bilan_apprenant.php">Tableau comparatif A</a>
                    <a href="bilan_intervenant.php">Tableau comparatif I</a>
                    <a href="consulter_moyenne.php">Progression Apprenant</a>
                </div></div>
            <div class="hr"></div>
        </nav>
        <article>
            <div>
                Classe
                <select>
                    <option value=""></option>
                    <option>1SN</option>
                    <option>2SN</option>
                </select>
                Matiere
                <select>
                    <option value=""></option>
                    <option>Mathematiques</option>
                    <option>Français</option>
                    <option>Physique</option>
                </select>
                Epreuve
                <select>
                    <option value=""></option>
                    <option>Epreuve 1</option>
                    <option>Epreuve 2</option>
                    <option>Epreuve 3</option>
                    <option>Epreuve 4</option>
                </select>    
                Etudiant
                <select>
                    <option value=""></option>
                    <option>Etudiant 1</option>
                    <option>Etudiant 2</option>
                </select>
            </div>
            <p></p>
            <div class="cell_tab_cpt">
                <table border="1" cellpadding="5" ><!-- tr creer ligne -->
                    <tr>
                        <td colspan="6">
                            Trier par
                            <select>
                                <option value=""></option>
                                <option>Ordre alphabétique</option>
                                <option>Note croissante</option>
                                <option>Note décroissante</option>
                                <option>Note manquante</option>
                            </select>
                            <input type="search" id="search_cpt" placeholder="Rechercher...">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th id="NonAcquis_Th">Non acquis</th>
                        <th id="EnCoursDacquisition_Th">En cours d'acquisition</th>
                        <th id="PresqueAcquis_Th">Presque acquis</th>
                        <th id="Acquis_Th">Acquis</th>
                    </tr>
                    <tr> 

                        <th>Competence 1</th>
                        <td  onclick="changeColorRouge(this)" id="cpt_1_NA"> </td>
                        <td  onclick="changeColorOrange(this)" id="cpt_1_ECA"></td>
                        <td  onclick="changeColorBleu(this)" id="cpt_1_PA"></td>
                        <td  onclick="changeColorVert(this)" id="cpt_1_A"> </td>
                    </tr>
                    <tr>    
                        <th>Competence 2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>    
                        <th>Competence 3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>   
                        <th>Competence 4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>    
                        <th>Competence 5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <p></p>
            <div style="text-align: center;">           
                <img src="img/Capture.png" alt="GraphiqueApprenant"/>
            </div>
        </article>
    </body>
</html>


