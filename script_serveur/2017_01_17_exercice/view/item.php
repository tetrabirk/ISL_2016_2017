<?php
// partie visuelle de la page who
// -> partie html dans laquelle est intégrée du code php

// récupération et association des infos dans le array result_page
$title          = $result_page[0]["item_title"];
$subtitle       = $result_page[0]["item_subtitle"];
$description    = $result_page[0]["item_description"];
?>

            <div class='twelve columns'>
                <?php
                echo !empty($title) ? "<h1>$title</h1>" : "";
                echo !empty($subtitle) ? "<h2>$subtitle</h2>" : "";
                echo !empty($description) ? $description : "";
                ?>
            </div>
