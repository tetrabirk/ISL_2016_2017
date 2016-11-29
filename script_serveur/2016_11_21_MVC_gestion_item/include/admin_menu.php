<?php
$user_nom=$_SESSION["user"][0]["nom"];
$user_prenom=$_SESSION["user"][0]["prenom"];
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
                        <li><a href='./?p=admin_item' title='' class="navbar-link">Gestion des pages</a></li>
                        <li><a href='./?p=admin_news' title='' class="navbar-link">Gestion des news</a></li>
                        <li><a href='./?p=admin_user' title='' class="navbar-link">Gestion des users</a></li>
                        <?php
                        if(islogged()){
                            echo" <li><a class='log' href='./?p=admin_membre'>".$user_prenom." ".$user_nom."</a><a href='./?p=login&log=out' title='déconnexion de l espace membre'><span class='fa fa-sign-out'></span></a></li>";
                        }else{
                            echo" <li><a href='./?p=login' title='connexion à l espace membre'><span class='fa fa-sign-in'></span></a></li>";
                        }
                        
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
