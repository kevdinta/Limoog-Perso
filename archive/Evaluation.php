

<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css"  media="screen and (min-width: 985px)"  href="css/style.css">
        <link rel="stylesheet" type="text/css"  media="screen and (max-width: 360px)"  href="css/test.css">
        <script type="text/javascript" src="js/fichier.js"></script>
    </head>
    <body>
        <header>
            <div class="title">LIMOOG</div>
        </header>
        <nav>
            <div class="hr"></div>
            <a href="index.html"><div class="onglet">Accueil</div></a>
            <div class="hr"></div>
            <div class="onglet">
                <a href="epreuve.html">Epreuve</a>
                <div class="ongletDrop">
                    <a href="competence.html">Evaluer</a>
                    <a href="preparation_epreuve.php">Créer Epreuve</a>
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
          
                <fieldset>
                    <legend>Evaluer</legend>
                    <div style="float: right;" id="iIntervenants" >Bonjour M.</div>
                    <div style="height: 5%"></div>
                    <label id="text_date">Date : </label><input type="date" id="date_eval">
                    <p></p>
                    <label id="text_class">Classe : </label>
                    <select id="select_class_form">
                        <option selected=""></option>
                        <option>sn</option>
                        <option>ag</option>
                        <option>dscg</option>
                    </select>
                    <p></p>
                    <label id="text_usager">&Eacute;tudiants : </label>
                    <select id="select_etudiant_form">
                        <option selected=""></option>
                        <option>Etudiant 1</option>
                    </select>
                    <p></p>
                    <button  id="tabCpt" onclick="afficher()">afficher</button>
                    <table cellpadding="8" border='1' style="border-collapse: collapse;display:none;">
                        <tr>
                            <th></th>
                            <th>Non acquis</th>
                            <th>En cours d'acquisition</th>
                            <th>Presque acquis</th>
                            <th>Acquis</th>
                        </tr>
                        <tr>
                            <td>
                                Competence 1
                            </td>
                            <td>
                                <input type="radio" id="NonAcquis" name="radioC1">
                            </td>
                            <td>
                                <input type="radio" id="EnCoursDacquisition" name="radioC1">
                            </td>
                            <td>
                                <input type="radio" id="PresqueAcquis" name="radioC1">
                            </td>
                            <td>
                                <input type="radio" id="Acquis" name="radioC1">
                            </td>     
                        </tr>
                    </table>
                    <div style='height: 2%;'></div>
                    <center>
                        <input type="submit" value="Envoyer">
                    </center>
                </fieldset>
         
        </article>
    </body>
</html>