<?php require_once './fct/Listes.php'; ?>
<article>
    <div id="ensemble_select_a">
        <span class="span_matiere">
            Matiere
            <select class="select_matiere">
                <option value=""></option>
                <?php ListeMatieres() ?>
            </select>
        </span>
        <span class="span_epreuve">
            Epreuve
            <select class="select_matiere">
                <option value=""></option>
                <?php ListeEpreuves() ?>
            </select>   
        </span>
    </div>
    <p></p>
    <?php include("partie/tableau_moyenne.php"); ?>
    <?php include("partie/graphique_moyenne.php"); ?>
</article>

