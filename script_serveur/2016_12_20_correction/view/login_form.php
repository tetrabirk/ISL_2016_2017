<?php
// récupération et association des infos dans le array result_page
$title          = $result_page[0]["item_title"];
$subtitle       = $result_page[0]["item_subtitle"];
$description    = $result_page[0]["item_description"];
?>

            <div class='twelve columns'>
                <?php
                echo !empty($title) ? "<h1>$title</h1>" : "";
                echo !empty($subtitle) ? "<h2>$subtitle</h2>" : "";
                echo !empty($description) ? $description : "";
                
                // affichage conditionnel du msg d'erreur
                echo !empty($msg) ? "<p class='msg_error'>$msg</p>" : "";
                ?>
                <form action="index.php?p=login" method="post" id="login_form">
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input class="form-control" type="email" name="login" id="login" value="" placeholder="Votre adresse e-mail" />
                    </div>
                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Votre mot-de-passe" />
                    </div>

                    <input class="button-primary u-pull-right" type="submit" name="submit" value="connexion" />
                </form>
            </div>