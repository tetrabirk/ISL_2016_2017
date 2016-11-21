<?php
// partie visuelle de la page home
// -> partie html dans laquelle peut être intégrée du code php

// récupération et association des infos dans le array result_page
$title          = $result_page[0]["item_title"];
$subtitle       = $result_page[0]["item_subtitle"];
$description    = $result_page[0]["item_description"];
?>

            <div class='nine columns'>
                <?php
                echo !empty($title) ? "<h1>$title</h1>" : "";
                echo !empty($subtitle) ? "<h2>$subtitle</h2>" : "";
                echo !empty($description) ? $description : "";
                ?>
            </div>

            <div class='three columns' id='news_box'>
                <ul>
                    <li><a href='' title=''><b>Lorem ipsum</b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                    <li><a href='' title=''><b>Lorem ipsum</b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                    <li><a href='' title=''><b>Lorem ipsum</b>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae...</a></li>
                </ul>
            </div>