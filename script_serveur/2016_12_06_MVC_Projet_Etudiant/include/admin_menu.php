
        <div class='full' id='nav'>
            <div class='row container'>
                <div id='logo' class='three columns'>
                    <a href='index.php' title=''>
                        <img src='images/content/logo_admin.png' alt='logo' />
                    </a>
                </div>
                <nav>
                    <ul>
                        
                        <li>
                            <a>Gestion du site</a>
                            <ul>
                                <li><a href='./?p=admin_item' title='' class="">Gestion des pages</a></li>
                                <li><a href='./?p=admin_news' title='' class="">Gestion des news</a></li>
                                <li><a href='./?p=admin_projet_categorie' title='' class="">Gestion des catégories</a></li>
                                <li><a href='./?p=admin_projet' title='' class="">Gestion des projets</a></li>
                                <?php
                                if($_SESSION["admin_level"] == "1"){
                                ?>
                                <li><a href='./?p=admin_user' title='' class="">Gestion de l'équipe</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a>Mon compte</a>
                            <ul>
                                <li><a href='./?p=admin_password' title='' class="">Modification mot de passe</a></li>
                                <li><a href='./?p=admin_unlog' title='' class="">Déconnexion</a></li>
                            </ul>
                        </li>
                        <li><a href='./?p=admin_unlog' title="déconnexion"><span class='fa fa-sign-out'></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
