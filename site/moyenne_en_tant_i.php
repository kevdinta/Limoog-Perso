<?php require_once './fct/select.php'; ?>
<?php require_once './fct/Listes.php'; ?>
<article>
    <div id="ensemble_select_i">
        <span class="span_class">
            Classe
            <select class="select_cpt_i">
                <option value=""></option>
                <?php
                ListeClasses();
                ?>
            </select>
        </span>
        <span class="span_class">
            Matiere
            <select class="select_cpt_i">
                <option value=""></option>
                <?php ListeMatieres(); ?>
            </select>
        </span>
        <span class="span_class">
            Epreuve
            <select class="select_cpt_i">
                <option value=""></option>
                <?php ListeEpreuves(); ?>
            </select>    
        </span>
        <span class="span_class">
            Etudiant
            <select class="select_cpt_i">
                <option value=""></option>
                <?php ListeEtudiants(); ?>
            </select>
        </span>
    </div>
    <p></p>
    <?php include("partie/tableau_moyenne.php"); ?>
    <?php include("partie/graphique_moyenne.php"); ?>
</article>
