
<form action=" " method= "POST" enctype="multipart/form-data">
        <input type="file" name="doc"/>
</form>
<?php
print_r($_FILES["doc"]);

//Array(
//    [name] => xxx.jpg
//    [type]=> image/jpeg
//    [tmp-name]=>/.../.../tmp/php/phpQz2v1
//    [size]=>27837
//    
$doc = $_FILES["doc"];
$new_name = dat("Yntlis").".jpg";
$tmp = $doc['tmp_name'];

if(is_uploaded_File($tmp)){
    move_uploaded_file($tmp,"upload/news/".$new_name);
}
        
?>



----------------------------
if(unlink(file))-T-F{
    update img DB
}
else{
    ->info
}