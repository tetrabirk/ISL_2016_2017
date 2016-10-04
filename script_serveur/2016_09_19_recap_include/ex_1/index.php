<?php
include_once ('config/fct_global.php');
include_once ('lib/affichage.php');
include_once ('include/head.php');
?>

    <body>
        <?php
//        menu
        include_once('include/menu.php')
        ?>
        <div class='container' id='content'>
            <?php
//            content
            echo aff_txt("home");
            echo aff_txt("newsbox");
            
            ?>
        </div>
        
        <?php
        
        include_once('include/footer.php');
        ?>
    </body>
</html>