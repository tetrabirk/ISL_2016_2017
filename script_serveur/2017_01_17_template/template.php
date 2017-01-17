<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/normalize.css" rel="stylesheet" type="text/css" />
        <link href="css/skeleton.css" rel="stylesheet" type="text/css" />
        <link href="css/public_custom.css" rel="stylesheet" type="text/css" />
        <link href="css/submenu.css" rel="stylesheet" type="text/css" />
        <link href="css/font/font-awesome.css" rel="stylesheet" type="text/css" />
        
        <script src="js/jsjquery-1.6.2.min.js" type="text/javascript"></script>
        <script src="js/lib/flow_slider/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/lib/flow_slider/jquery-mousewheel-3.0.6/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src="js/lib/flow_slider/flowslider.jquery.js" type="text/javascript"></script>
        <script src="js/init_jquery.js" type="text/javascript"></script>
    </head>
    
    
    <body>
                
        <div class='full' id='top'>
            <div class='row container'>
                <div class="six columns">
                    <img src="images/content/logo_public.png" alt="logo architecte" />
                </div>
                <div class="six columns" id='top_info'>
                    <p>architecte@isl.be <i>-</i> 0486 00 00 00</p>
                    <h2>Atelier d'architecture Saint Laurent</h2>
                    <p>Rue Saint Laurent 33 <i>-</i> 4000 Liège <a href='' title='contacter notre atelier'>contactez-nous</a></p>
                </div>
            </div>
        </div>
        <nav class='full'>
            <div class='row container' id='nav'>
                <ul class='four columns' id='link_1'>
                    <li class='hd'>Actualités</li>
                    <li><a href='' title="">Voir toutes nos actualités</a></li>
                </ul>
                <ul class='four columns' id='link_2'>
                    <li class='hd'>L'atelier</li>
                    <li><a href='' title="">Qui sommes-nous ?</a></li>
                    <li><a href='' title="">F.A.Q.</a></li>
                    <li><a href='' title="">Contact</a></li>
                </ul>
                <ul class='four columns' id='link_3'>
                    <li class='hd'>Nos projets</li>
                    <li><a href='' title="">Constructions neuves</a></li>
                    <li><a href='' title="">Rénovations</a></li>
                    <li><a href='' title="">Architecture d'intérieur</a></li>
                </ul>
            </div>
        </nav>
        <ul class="full slider-horizontal nav" id='slideroustic'>
            <?php
            for($i = 1; $i <= 23; $i++){
            ?>
<li><a href="#goto_<?php echo $i; ?>">Titre de l'actualité <?php echo $i; ?></a></li>
            <?php
            }
            ?>

        </ul>
        <input type="hidden" name="memo_position" id="memo_position" value="0" />
        <div class='full row'>
            <a class="one column leftArrow">&#10096;</a>
            
            <div class="ten columns slide" id="viewer">
                <?php
                for($i = 1; $i <= 23; $i++){
                ?>
                
                <div class="bloc_news" id='goto_<?php echo $i; ?>'>
                    <div>
                        <h2>Titre de l'actualité <?php echo $i; ?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus volutpat tortor non lacinia.</p>
                        <p>Quisque feugiat justo eu vulputate tempus.</p>
                        <p>Praesent pretium porta lacus, ut feugiat diam.</p>
                    </div>
                    <img src="images/actualite_test.png" alt="Photo actualité" id="viewer_zoom_1" />
                </div>
                <?php
                }
                ?>
                
                <div class="inlineblock" id="comble"></div>
            </div>
            
            <a class="one column rightArrow">&#10097;</a>
        </div>
        
        
        <script>
            $("#slideroustic").mouseover(function () { 
                $(".www_FlowSlider_com-branding").remove();
            });
        </script>
    </body>
</html>