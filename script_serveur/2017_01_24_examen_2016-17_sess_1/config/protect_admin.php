<!--LEYENS Ludovic 24-01/2017-->
<?php
if((!isset($_SESSION["admin_id"])) || (empty($_SESSION["admin_id"]))|| (!is_numeric($_SESSION["admin_id"]))){
    header("Location: index.php?p=login");
}
?>