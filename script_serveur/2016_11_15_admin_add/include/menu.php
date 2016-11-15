        
        <div class='full' id='nav'>
            <div class='row container'>
                <div id='logo' class='three columns'>
                    <a href='index.php' title=''>
                        <img src='images/content/logo.png' alt='logo' />
                    </a>
                </div>
                <nav>
                    <ul>
                        <?php
                        $li_menu = "";
                        if(isset($result_menu) && is_array($result_menu) && sizeof($result_menu) > 0){
                            foreach($result_menu as $rs){
                                $m_item_id      = $rs["item_id"];
                                $m_item_menu    = $rs["item_menu"];
                                $m_in_menu      = $rs["in_menu"];
                                $m_is_visible   = $rs["is_visible"];
                                
                                $li_menu .= ($m_is_visible == 1 && $m_in_menu == 1) ? "<li><a href='./?p=item&id=".$m_item_id."' title=''>".$m_item_menu."</a></li>" : "";
                            }
                        }
                        echo $li_menu;
                        ?>
                        <li><a href='./?p=admin_item' title="connexion à l'espace membre"><span class='fa fa-sign-in'></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

