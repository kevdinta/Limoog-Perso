<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/fichier.js"></script>
        <SCRIPT language="javascript">
            function addRow(tableID) {

                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);
                var colCount = table.rows[0].cells.length;
                for (var i = 0; i < colCount; i++) {

                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                    //alert(newcell.childNodes);
                    switch (newcell.childNodes[0].type) {
                        case "text":
                            newcell.childNodes[0].value = ""; // val cellule a chaque fois qu'on clique sur le btn
                            break;
                        case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    }
                }
            }

            function deleteRow(tableID) {
                try {
                    var table = document.getElementById(tableID);
                    var rowCount = table.rows.length;
                    for (var i = 0; i < rowCount; i++) {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked) {
                            /*    if (rowCount <= 1) {
                             alert("Cannot delete all the rows.");
                             break;
                             } */
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                        }
                    }
                } catch (e) {
                    alert(e);
                }
            }

        </SCRIPT>
    </head>
    <body>
        <header>
            <div class="title">LIMOOG</div>
        </header>
        <nav>
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
        </nav>
        <article>
            <button type="button" id="actualiser" OnClick="javascript:window.location.reload()" value="Actualiser"><img src="img/refresh.png" style="width: 20px; height: 20px;" alt="refresh"></button>
            <div style="height: 5%"></div>
            <form method="POST" action="traitement_form.php">
                <fieldset>
                    <legend>Pr&eacute;paration des &eacute;preuves</legend>

                    <div style="height: 5%"></div>

                    <div class="date_form1">
                    <label>Date</label> :
                    <input type='date' id="date_form" />
                    </div>
                    <p></p>
                    <div class="epreuve">
                    <label>Nom de l'&eacute;preuve</label> : <input type="text" name="epreuve" />
                    </div>
                    <p></p>
                    <div class="classe">
                    <label>Classe</label> : 
                    <select name="classe_select" class="classe_select">
                        <option value=""></option>
                        <option>AG</option>
                        <option>SNIR</option>
                        <option>SEN</option>
                        <option>STI2D</option>
                        <option>STMG</option>
                    </select>
                    </div>
                    <p></p>
                    <div class="matiere">
                    <label>Mati&egrave;re</label> :
                    <select name="matiere_select" class="matiere_s">
                        <option value=""></option>
                        <option>Maths</option>
                        <option>Français</option>
                        <option>Informatique</option>
                    </select>
                    </div>
                    <p></p>
                    <div class="cpt">
                    <label>Comp&eacute;tences</label> :
                    <select name="competences_select" class="competences_s">
                        <option value=""></option>
                        <option>C1</option>
                        <option>C2</option>
                        <option>C3</option>
                        <option>C4</option>
                    </select>
                    </div>
                    <div style="height:5%;"></div>

                    <center>
                        <INPUT type="button" value="Ajouter ligne" onclick="addRow('dataTable')" />

                        <INPUT type="button" value="Supprimer ligne" onclick="deleteRow('dataTable')" />
                    </center>
                    <div style="height: 2%;"></div>
                    <div class="form_txt">
                        <TABLE id="dataTable" border="1">
                       <!--     <th id="test">aa</th>
                            <th id="test2">aaa</th> -->
                            <TR>
                                <TD><INPUT type="checkbox" name="chk"/></TD>
                                <TD><INPUT type="text" name="txt"/></TD>

                            </TR>
                        </TABLE> 
                    </div>

                    <div style="height: 2%;"></div>
                    <center>      <input type='submit' value='Envoyer'/></center>

                </fieldset>
            </form>
            <footer id="footer">Version 2.0 - 2016</footer>
        </article>
    </body>

</html>
