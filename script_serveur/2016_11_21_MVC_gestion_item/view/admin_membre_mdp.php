<?php
    if (!empty($error)){
        echo $error;
    }
?>

<form action="index.php?p=admin_membre&action=mdp" method="post" id="login_form">

    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="apassword" id="apassword" placeholder="Ancien mot-de-passe" />
    </div>
    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="npassword" id="npassword" placeholder="Nouveau mot-de-passe" />
    </div>
    <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input class="form-control" type="password" name="rpassword" id="rpassword" placeholder="Répéter mot-de-passe" />
    </div>

    <input class="button-primary u-pull-right" type="submit" name="submit" value="Modifier" />
</form>
    
