<!--LEYENS Ludovic 24-01/2017-->
        <div class='full' id='nav'>
            <div class='row container'>
                <div id='logo' class='three columns'>
                    <a href='index.php' title=''>
                        <img src='images/content/logo_admin.png' alt='logo' />
                    </a>
                </div>
                <nav>
                    <ul>
                        <?php
                        if(isset($_SESSION["admin_id"])){
                        ?>
                        <li>
                            <a>Gestion du site</a>
                            <ul>
                                <li><a href='./?p=admin_service' title='' class="">Gestion des services</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>Mon compte</a>
                            <ul>
                                <li><a href='./?p=admin_unlog' title='' class="">Déconnexion</a></li>
                            </ul>
                        </li>
                        <li><a href='./?p=admin_unlog' title="déconnexion"><span class='fa fa-sign-out'></span></a></li>
                        <?php
                        }else{
                        ?>
                        <li><a href='./?p=admin' title="déconnexion"><span class='fa fa-sign-in'></span></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
