<?php require_once '/fct/select.php'; ?>
<?php require_once '/fct/Listes.php'; ?>  
<article>
    <div class="titleEpreuve">        
        <h1>Modifier une épreuve</h1>
    </div>
    <div id="ensemble_creer_epreuve">
        <span class="span_preparer_epreuve_date">
            Date   <input type="text" id="datepicker" />
        </span> 
        <span class="span_preparer_epreuve_nom">
            Nom de l'&eacute;preuve 
            <input type="text" class="input_preparer">
        </span>
        <span class="span_preparer_epreuve_classe">
            Classe
            <select class="input_preparer">
                <option value=""></option>
                <?php
                $classes = selectInGroupes();
                foreach ($classes as $row) {
                    echo "<option value='" . $row[iid] . "'>" . $row[cnomgroupe] . "</option>/n";
                }
                ?>
            </select>
        </span>
        <span class="span_preparer_epreuve_matiere"> 
            Matiere
            <select class="input_preparer">
                <option value=""></option>
                <?php ListeMatieres() ?>
            </select>
        </span>
    </div>
    <p></p>

    <?php include("partie/tableau_epreuve_cree.php"); ?>
</article>