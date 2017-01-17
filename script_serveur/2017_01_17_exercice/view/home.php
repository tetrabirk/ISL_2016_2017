<ul class="full slider-horizontal nav" id='slideroustic'>
            
            <?php
$li_news = "";
if(isset($result_news) && is_array($result_news) && sizeof($result_news) > 0){
    foreach($result_news as $rs){
        $n_news_id      = $rs["news_id"];
        $n_titre    = $rs["titre"];
        $n_is_visible   = $rs["is_visible"];

        $li_news .= ($n_is_visible == 1) ? "<li><a href='#goto_".$n_news_id."' title=''>".$n_titre."</a></li>" : "";
    }
}
echo $li_news;
            ?>

        </ul>
        <input type="hidden" name="memo_position" id="memo_position" value="0" />
        <div class='full row'>
            <a class="one column leftArrow">&#10096;</a>
            
            <div class="ten columns slide" id="viewer">
                
                <?php
                    $div_viewer = "";
                    if(isset($result_news) && is_array($result_news) && sizeof($result_news) > 0){
                        foreach($result_news as $rs){
                            $n_news_id      = $rs["news_id"];
                            $n_titre        = $rs["titre"];
                            $n_description  = $rs["description"];
                            $n_img          = $rs["img"];
                            $n_is_visible   = $rs["is_visible"];

                            $div_viewer .= "<div class='bloc_news' id='goto_".$n_news_id."'>
                                            <div>
                                                    <h2>".$n_titre."</h2>
                                                    <p>".$n_description."</p>
                                                </div>
                                                <img src='upload/news/".$n_img."' alt='".$n_titre."' id='viewer_zoom_1' />
                                            </div>
                                    ";

                        }
                    }
                    echo $div_viewer;
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