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