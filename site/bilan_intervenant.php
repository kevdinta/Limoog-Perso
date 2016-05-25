<?php require_once './fct/select.php'; ?>
<?php require_once './fct/Listes.php'; ?>
<article>
    <div id="ensemble_bilan_i">
        <span class="span_bilan_i">
            Classe
            <select class="select_bilan_i">
                <option value=""></option>
                <?php
                $classes = selectInGroupes();
                foreach ($classes as $row) {
                    echo "<option value='" . $row[iid] . "'>" . $row[cnomgroupe] . "</option>/n";
                }
                ?>
            </select>
        </span>
        <span  class="span_bilan_i">
            Etudiant
            <select class="select_bilan_i">
                <option value=""></option>
                <?php ListeEtudiants() ?>
            </select>
        </span>
        <span  class="span_bilan_i">
            Matiere
            <select class="select_bilan_i">
                <option value=""></option>
                <?php ListeMatieres() ?>
            </select>
        </span>
        <span class="span_bilan_i">
            Epreuve
            <select class="select_bilan_i">
                <option value=""></option>
                <?php ListeEpreuves() ?>
            </select>
        </span>
    </div>
    <div class="espacer"></div>
    <?php include("partie/tableau_bilan.php"); ?>
</article>