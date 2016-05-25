<?php require_once './fct/select.php'; ?>
<?php require_once './fct/Listes.php'; ?>
<article>
        <div style="height: 2%;"></div>
        <div id="ensemble_select_cpt">
       <!-- <span class="date1" id="date1">
            Date
            <input type="date" id="dateCpt">
       </span> --><span class="date1">
                Date
                <input type="text" id="datepicker" />
            </span>
            <span class="class" id="class">
                Classe
                <select class="classe_select" id="class_select">
                    <option value=""></option>
                    <?php
                    $classes = selectInGroupes();
                    foreach ($classes as $row) {
                        echo "<option value='" . $row[iid] . "'>" . $row[cnomgroupe] . "</option>/n";
                    }
                    ?>
                </select>
            </span>
            <span id="matiere">
                Matiere
                <select class="matiere_select" id="matiere_select">
                    <option value=""></option>
                    <?php ListeMatieres(); ?>
                </select>
            </span>
            <span id="epreuve">
                Epreuve
                <select id="epreuve_select">
                    <option value=""></option>
                    <?php ListeEpreuves(); ?>
                </select>  
            </span>
            <span id="etudiant">
                Etudiant
                <select id="etudiant_select">
                    <option value=""></option>
                    <?php ListeEtudiants(); ?>
                </select>
            </span>
        </div>
        <p></p>
        <!--   <div class="cell_tab_cpt">
               <table border="1" cellpadding="5" class="tabCompetence" >
                   <tr>
                       <td></td>
                       <th class="NonAcquisCpt"></th>
                       <th class="EnCoursDacquisitionCpt"></th>
                       <th class="PresqueAcquisCpt"></th>
                       <th class="AcquisCpt"></th>
                   </tr>
                   <tr>    
                       <th class="Competence_Th">Competence 1</th>
                       <td  onclick="changeColorRouge(this)" id="cpt_1_NA" name="cpt_1" > </td>
                       <td  onclick="changeColorOrange(this)" id="cpt_1_ECA" name="cpt_1" ></td>
                       <td  onclick="changeColorBleu(this)" id="cpt_1_PA" name="cpt_1" ></td>
                       <td  onclick="changeColorVert(this)" id="cpt_1_A" name="cpt_1" > </td>
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
           <p></p> -->
        <div class="cell_tab_cpt">
            <table border="1" id="tab_evaluer">
              <!--  <tr>
                    <td id="search_bilan_cpt_cell" colspan="3">
                        <input type="search" id="search_bilan_cpt" placeholder="Rechercher une compétence...">
                    </td>
                </tr> -->
                <thead>
                    <tr>
                        <th>Liste des compétences</th>
                        <th class="NonAcquisCpt"></th>
                        <th class="EnCoursDacquisitionCpt"></th>
                        <th class="PresqueAcquisCpt"></th>
                        <th class="AcquisCpt"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Compétence 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 7</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 9</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 11</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 12</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 13</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Compétence 15</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Lettre</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Calcul</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
        <div id="cpt"> <input type="submit" value="Envoyer" id="envoyer_cpt"> </div>
    <br>
</article>