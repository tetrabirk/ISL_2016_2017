
<p class="align-right"><a href="?p=admin_user&action=add" title="cliquer pour ajouter une nouvelle entrée" class="button">ajouter</a></p>
                
<table class="u-full-width">
    <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Level</th>
        <th class="align-right">Actions</th>
    </tr>
    <?php 
        foreach ($get_user as $user) {
            $admin_id   =$user['admin_id'];
            $login      =$user['login'];
            $nom        =$user['nom'];
            $prenom     =$user['prenom'];
            $level      =$user['level'];
            $level      =$user['level'];
            $level      =$user['level'];
            $is_visible =$user['is_visible'];
            
            $ico_action = $is_visible == "1" ? "hidden" : "show";
            $ico_visible= $is_visible == "1" ? "fa-eye-slash" : "fa-eye";
            $class_visible  = $is_visible == "1" ? "" : " class=\"invisible\"";
                                
            $html="";
            $html.="<tr".$class_visible.">";
            $html.="    <td>".$user['admin_id']."</td>";
            $html.="    <td>".$user['login']."</td>";
            $html.="    <td>".$user['nom']."</td>";
            $html.="    <td>".$user['prenom']."</td>";
            $html.="    <td>".$user['level']."</td>";
            $html.="    <td class='align-right'>";
            
            //ajouter test de level admin

            if($is_visible == "0"){
                $html.="<a href='./?p=admin_user&action='delete' id=".$admin_id."' title=''><span class='fa fa-trash-o ico_action'></span></a>";
            }
            $html.="    <a href='./?p=admin_user&action=update&id=".$admin_id."' title=''><span class='fa fa-pencil-square-o ico_action'></span></a>
                        <a href='./?p=admin_user&action=".$ico_action."&id=".$admin_id."' title=''><span class='fa ".$ico_visible." ico_action'></span></a>";
            
            //ajouter test de level admin
            
            $html.="</td>";
            $html.="</tr>";
            echo $html;
        }
    ?>
</table>

