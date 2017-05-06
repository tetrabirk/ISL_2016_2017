
<?php

$exception = '';

try {
    $pdo = new PDO('mysql: host= localhost;dbname=isl2017', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $pdo->exec("SET CHARACTER SET utf8");
} catch (\PDOException $exception) {
    //une erreur s'est produite
    echo 'catastrophe! ' . $exception->getMessage();
}

return $pdo;
