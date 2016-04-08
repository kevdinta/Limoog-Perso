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
            <ul class="menu-vertical">
                <li class="href_menu_epreuve" style="margin-left: -40px; "><a href="competence_a.php">En tant qu'apprenant</a></li>
                <li class="href_menu_epreuve" style="margin-left: -40px;"><a href="competence_i.php">En tant qu'intervenant</a></li>
            </ul>
            <br>						
        </article>
    </body>
</html>