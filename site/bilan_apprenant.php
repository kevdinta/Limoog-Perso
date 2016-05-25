<?php require_once './fct/Listes.php'; ?>
<article>
    <div id="ensemble_bilan">
        <span class="span_matiere_bilan">
            Matiere
            <select id="matiere_bilan">
                <option value=""></option>
                <?php ListeMatieres() ?>
            </select>
        </span>
        <span class="span_epreuve_bilan">
            Epreuve
            <select id="epreuve_bilan">
                <option value=""></option>
                <?php ListeEpreuves() ?>
            </select>
        </span>
    </div>
    <div class="espacer"></div>
    <?php include("partie/tableau_bilan.php"); ?>
</article>