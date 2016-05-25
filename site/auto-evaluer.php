<?php require_once './fct/Listes.php'; ?>
<article>
    <div id="ensemble_span_auto_evaluer">
        <span id="span_date_auto_evaluer">
            Date   <input type="text" id="datepicker" />
        </span>
        <span id="span_matiere_auto_evaluer">
            Matiere
            <select id="matiere_select_auto_evaluer">
                <option value=""></option>
                <?php ListeMatieres(); ?>
            </select>
        </span>
        <span id="span_epreuve_auto_evaluer">
            Epreuve
            <select id="epreuve_select_auto_evaluer">
                <option value=""></option>
                <?php ListeEpreuves(); ?>
            </select>    
        </span>
    </div>
    <p></p>
  <!--  <div class="cell_tab_cpt">
        <table border="1" cellpadding="5" class="tabCompetence">

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
    </div> -->
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
</article>