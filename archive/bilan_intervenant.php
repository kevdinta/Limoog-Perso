<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="C:/Users/k.dintanavong/Desktop/Test/js/fichier.js"></script>
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
            <div>
                Classe
                <select>
                    <option value=""></option>
                    <option>Classe 1</option>
                </select>
                Etudiant
                <select>
                    <option value=""></option>
                    <option>Etudiant 1</option>
                    <option>Etudiant 2</option>
                </select>

                Matiere
                <select>
                    <option value=""></option>
                    <option>Matiere 1</option>
                </select>
                Epreuve
                <select>
                    <option value=""></option>
                    <option>Epreuve 1</option>
                </select>
            </div>
            <div class="tab_inter_pos_I">
                <table border="1" id="tab_intervenant">
                    <tr>
                    <h1>Intervenant</h1>
                    </tr>
                    <tr>
                    <input type="search" id="search_bilan_cpt" placeholder="Rechercher une compétence...">
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 5</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="tab_appr_pos_I">
                <table border="1" id="tab_apprenant">
                    <tr>
                    <h1>Apprenant</h1>
                    </tr>
                    <tr>
                    <input type="search" id="search_bilant_cpt_A" placeholder="Rechercher une compétence...">
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 2</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 4</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&#8226 Compétence 5</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </article>
    </body>
</html>