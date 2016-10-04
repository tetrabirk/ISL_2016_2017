<?php
$titre =$result[0]['item_title'];
$sub = $result[0]['item_subtitle'];
$description =$result[0]['item_description'];

echo !empty($titre)? "<h1>$titre</h1>" : "";
echo !empty($sub)? "<h2>$sub</h2>" : "";
echo !empty($description)? "<p>$description</p>" : "";

?>