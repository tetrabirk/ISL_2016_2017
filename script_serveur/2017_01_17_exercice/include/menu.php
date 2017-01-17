        <nav class='full'>
            <div class='row container' id='nav'>
                <ul class='four columns' id='link_1'>
                    <li class='hd'>Actualités</li>
                    <?php
                        $li_menu = "";
                        if(isset($result_menu) && is_array($result_menu) && sizeof($result_menu) > 0){
                            foreach($result_menu as $rs){
                                $m_item_id      = $rs["item_id"];
                                $m_item_menu    = $rs["item_menu"];
                                $m_in_menu      = $rs["in_menu"];
                                $m_is_visible   = $rs["is_visible"];
                                //bidouillage pour récupérer "home" sans les autres élément du menu

                                $li_menu .= ($m_is_visible == 1 && $m_in_menu == 1 && $m_item_id == 1) ? "<li><a href='./?p=item&id=".$m_item_id."' title=''>".$m_item_menu."</a></li>" : "";
                            }
                        }
                        echo $li_menu;
                    ?>
                </ul>
                <ul class='four columns' id='link_2'>
                    <li class='hd'>L'atelier</li>
                    <?php
                        $li_menu = "";
                        if(isset($result_menu) && is_array($result_menu) && sizeof($result_menu) > 0){
                            foreach($result_menu as $rs){
                                $m_item_id      = $rs["item_id"];
                                $m_item_menu    = $rs["item_menu"];
                                $m_in_menu      = $rs["in_menu"];
                                $m_is_visible   = $rs["is_visible"];
                                //bidouillage pour récupérer tt les élément du menu sauf "home"
                                $li_menu .= ($m_is_visible == 1 && $m_in_menu == 1 && $m_item_id != 1) ? "<li><a href='./?p=item&id=".$m_item_id."' title=''>".$m_item_menu."</a></li>" : "";
                            }
                        }
                        echo $li_menu;
                    ?>
                </ul>
                <ul class='four columns' id='link_3'>
                    <li class='hd'>Nos projets</li>
                    <?php
                        $li_menu = "";
                        if(isset($result_menu_categ) && is_array($result_menu_categ) && sizeof($result_menu_categ) > 0){
                            foreach($result_menu_categ as $rs){
                                $m_proj_categ_id= $rs["projet_categorie_id"];
                                $m_categ        = $rs["categorie"];
                                $m_is_visible   = $rs["is_visible"];
                                
                                $li_menu .= ($m_is_visible == 1) ? "<li><a href='./?p=categ&id=".$m_proj_categ_id."' title=''>".$m_categ."</a></li>" : "";
                            }
                        }
                        echo $li_menu;
                    ?>
                </ul>
            </div>
        </nav>
