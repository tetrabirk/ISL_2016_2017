
<?php
$li_m ="";

foreach($result_menu as $rm){
                            $item_menu= $rm['item_menu'];
                            $item_id=   $rm['item_id'];
                            $li_m .= "<li><a href='?p=item&id=".$item_id."' title=''>".$item_menu."</a></li>";
                       }
                        
?>



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
                        echo $li_m;                        
                        ?>
                        <li><a href='admin.php' title="connexion à l'espace membre"><span class='fa fa-sign-in'></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

