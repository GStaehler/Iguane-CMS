<?php

try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
	if (!$bdd) {
    throw new Exception('Database does not exists !');
    }
}

catch (Exception $e) {
	echo "<style>";
	require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css");
	echo "</style>";
	echo "<link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">";
    echo "<div class=\"container text-center\" style=\"margin-top: 80px;\"><h1 style=\"font-family: 'Indie Flower';\">Iguane CMS</h1><div class=\"mb-4 lead\" style=\"font-family: 'Noto Sans', sans-serif;\">Installation</div><div class=\"mb-4 alert alert-danger\">Database doesn't exist !</div></div>";
}
