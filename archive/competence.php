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
            <div class="onglet" id="ongletBil"> <a href="">Bilan</a>
                <div class="ongletDrop">
                    <a href="bilan_apprenant.php">Bilan apprenant</a>
                    <a href="bilan_intervenant.php">Bilan intervenant</a>
                    <a id="tes" href="consulter_moyenne.php">Consulter sa moyenne</a>
                </div></div>
            <div class="hr"></div>
        </nav>
        <article>
            <div id="ensemble_select_cpt">
                <span class="date1" id="date1">
                    Date
                    <input type="date">
                </span>
                <span class="class" id="class">
                    Classe
                    <select class="classe_select" id="class_select">
                        <option value=""></option>
                        <option>1SN</option>
                        <option>2SN</option>
                    </select>
                </span>
                <span id="matiere">
                    Matiere
                    <select class="matiere_select" id="matiere_select">
                        <option value=""></option>
                        <option>Mathematiques</option>
                        <option>Français</option>
                        <option>Physique</option>
                    </select>
                </span>
                <span id="epreuve">
                    Epreuve
                    <select id="epreuve_select">
                        <option value=""></option>
                        <option>Epreuve 1</option>
                        <option>Epreuve 2</option>
                        <option>Epreuve 3</option>
                        <option>Epreuve 4</option>
                    </select>  
                </span>
                <span id="etudiant">
                    Etudiant
                    <select id="etudiant_select">
                        <option value=""></option>
                        <option>Etudiant 1</option>
                        <option>Etudiant 2</option>
                    </select>
                </span>
            </div>
            <p></p>
            <div class="cell_tab_cpt">
                <table border="1" cellpadding="5" class="tabCompetence" ><!-- tr creer ligne -->

                    <tr>
                        <td colspan="5">
                            <input type="search" id="search_cpt" placeholder="Rechercher...">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <th class="NonAcquisCpt"></th>
                        <th class="EnCoursDacquisitionCpt"></th>
                        <th class="PresqueAcquisCpt"></th>
                        <th class="AcquisCpt"></th>
                    </tr>
                    <tr>    
                        <th class="Competence_Th">Competence 1</th>
                        <td  onclick="changeColorRouge(this)" id="cpt_1_NA"> </td>
                        <td  onclick="changeColorOrange(this)" id="cpt_1_ECA"></td>
                        <td  onclick="changeColorBleu(this)" id="cpt_1_PA"></td>
                        <td  onclick="changeColorVert(this)" id="cpt_1_A"> </td>
                    </tr>
                    <tr>    
                        <th class="Competence_Th">Competence 2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>    
                        <th class="Competence_Th">Competence 3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>    
                        <th class="Competence_Th">Competence 4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>    
                        <th class="Competence_Th">Competence 5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
            </div>
            <p></p>
            <div id="cpt"> <input type="submit" value="Envoyer" id="envoyer_cpt"> </div>
        </article>
    </body>
</html>

