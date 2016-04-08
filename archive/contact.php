<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">   
        <link rel="stylesheet" type="text/css" href="css/contact.css">   
    </head>
    <body>
        <header>
            <div class="title">LIMOOG</div>
        </header>
        <nav>
            <div class="hr"></div>
            <a href="index.html">
                <div class="onglet">Accueil</div>
            </a>
            <div class="hr"></div>
            <div class="onglet">
                <a href="epreuve.html">Epreuve</a>
                <div class="ongletDrop">
                    <a href="competence.html">Evaluer</a>
                    <a href="preparation.html">Créer Epreuve</a>
                    <a href="#">Liste epreuves</a>
                </div>
            </div>
            <div class="hr"></div>
            <a href=""><div class="onglet">Bilan</div></a>
            <div class="hr"></div>
            <a href="contact.php"><div class="onglet">Contacts</div></a>
            <div class="hr"></div>
            <div style="position: relative; float: right;">
                <div class="hr"></div>
            </div>
        </nav>
        <article>
            <form method="POST" action="envoyer_contact.php">
                <fieldset>
                    <legend>Contacts</legend>
                    <label id="iId">id #?</label>
                    <div style="height: 5%;"></div>
                    <label id="text_Nom">Nom : </label><input type="text" id="cNom">
                    <p></p>
                    <label id="text_Prenom">Pr&eacute;nom : </label><input type="text" id="cPrenom">
                    <p></p>
                    <label id="text_Adresse">Adresse : </label><textarea id="cAdresse" rows="3" style="resize:none;"></textarea>
                    <p></p>
                    <label id="text_CP">CP : </label><input type="text" id="cCP">
                    <p></p>
                    <label id="text_Ville">Ville : </label><input type="text" id="cVille">
                    <p></p>
                    <label id="text_Tel">Tel : </label><input type="text" id="cTel">
                    <p></p>
                    <label id="text_Portable">Portable : </label><input type="text" id="cPortable">
                    <p></p>
                    <label id="text_Mel">Mel : </label><input type="text" id="cMel">
                    <div style="height: 5%"></div>
                    <center><button type="submit">Envoyer</button></center>
                </fieldset>
            </form>
            <div style="height: 10%"></div>
            <footer id="footer">Version 2.0 - 2016</footer>
        </article>
    </body>

</html>

