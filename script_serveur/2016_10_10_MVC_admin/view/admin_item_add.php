<?php
    formItem('?p=admin_item&action=add','post',$data);
    
    if(!empty($error)){
        echo "<div class='msg_error'>".$error."</div>";
    }
        
?>