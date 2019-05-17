<?php

try {
$bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');    
}

catch (Exception $e) {
    echo "Database does not exists !";
}

if (!$bdd) {
    throw new Exception('Database does not exists !');
}
