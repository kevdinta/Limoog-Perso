<html>
    <?php include("./partie/head.php"); ?>
    <body>
        <?php include("./partie/logo.php"); ?>
        <div style="height: 2%;"></div> 
        <?php include("./partie/menu.php"); ?>
        <?php
        if (!isset($_GET['pages'])) {
            $pages = 'home';
        } else {
            $pages = ltrim($_GET['pages'], ".");
        }
        include '/site/' . $pages . '.php';
        ?>      
    </body>
    <?php
    if ($_GET['pages'] != 'moyenne_en_tant_i' && $_GET['pages'] != 'moyenne_en_tant_a' && $_GET['pages'] != 'bilan_apprenant' && $_GET['pages'] != 'bilan_intervenant') {
        include("./partie/footer.php");
    } else {
        include("./partie/footerGr.php");
    }
    ?>
</html>