<?php require_once './fct/select.php'; ?>
<?php require_once './fct/Listes.php'; ?>  
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
                <?php
                $classes = selectInGroupes();
                foreach ($classes as $row) {
                    echo "<option value='" . $row[iid] . "'>" . $row[cnomgroupe] . "</option>/n";
                }
                ?>
            </select>
        </span>
        <span class="span_matiere">
            Matiere
            <select class="select_matiere">
                <option value=" "></option>
                <?php ListeMatieres(); ?>
            </select>
        </span>
        <span class="span_epreuve">
            Epreuve
            <select class="select_epreuve_liste">
                <option value=''></option>
                <?php ListeEpreuves(); ?>
            </select>
        </span>
        <span class="span_creer_epreuve">Créer
            <a href="index.php?pages=creer_epreuve">
                <input type="button" alt='creer_epreuve' title="creer_epreuve" value='+'>
            </a> 
        </span>
    </div>
    <div style="height: 5%;"></div>
    <div id="tab_cell_epreuve">
        <table border="1" id="liste_epreuve_tab">
            <thead>
                <tr>
                    <th>Liste des épreuves                  
                    </th>
                    <th>Date</th>
                    <th id="modifier_suppr"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Epreuve 1                
                    </td> 
                    <td></td>
                    <td>
                        <div class="img_epreuve">
                            <input type="checkbox"> 
                            <a href="index.php?pages=modifier_epreuve">
                                <img style="width:20px;height:20px;" alt="modifier" title="modifier"src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                            </a>
                        </div>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        Epreuve 2
                    </td>
                    <td></td>
                    <td>
                        <div class="img_epreuve">
                            <input type="checkbox"> 
                            <a href="modifier_epreuve.php">
                                <img style="width:20px;height:20px;" alt="modifier" title="modifier" src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Epreuve 3               
                    </td>
                    <td></td>
                    <td>
                        <div class="img_epreuve">
                            <input type="checkbox"> 
                            <a href="modifier_epreuve.php">
                                <img style="width:20px;height:20px;" alt="modifier" title="modifier" src="img/modifier.png" onclick="javascript:tafonction();" alt="modifier" />
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="height:5%"></div>
    <center><input type="submit" value="Supprimer" onclick="Supprimer()"></center>
    <br>
</article>