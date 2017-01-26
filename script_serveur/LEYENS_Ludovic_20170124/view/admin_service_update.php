<!--LEYENS Ludovic 24-01/2017-->
<?php


?>

            <div class='twelve columns'>
                <h1>Gestion des services</h1>
                <h2>Modification</h2>
                <?php
                echo !empty($msg_error) ? "<p class='msg_error'>$msg_error</p>" : "";
                echo !empty($msg_end) ? "<p class='msg_ok'>$msg_end</p>" : "";
                ?>
                <?php
                $action = "?p=admin_service&action=update&id=".$get_id;
                echo formService($result_service, $action, 'post');
                ?>
                
                
            </div>
