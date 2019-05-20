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
    echo "<div class=\"container text-center\" style=\"margin-top: 80px;\"><h1 style=\"font-family: 'Indie Flower';\">Iguane CMS</h1><div class=\"mb-4 lead\" style=\"font-family: 'Noto Sans', sans-serif;\">Installation</div><br>";
	if(!isset($_POST['createDb'])) {
		echo "<div class=\"mb-4 alert alert-danger\">Database doesn't exist !</div>";
	}
	echo "<form action=\"\" method=\"post\">";
	if(!isset($_POST['createDb'])) {
		echo "<br><small>Create database with username=\"<b>root</b>\" and password=\"\"</small><br>";
		echo "<small>It may take a few seconds !</small><br>";
		echo "<br><input type=\"submit\" name=\"createDb\" class=\"btn btn-outline-success\" value=\"Install\">";
	}
	echo "</form>";

	if (isset($_POST['createDb'])) {

		$servername = "127.0.0.1";
		$username = "root";
		$password = "";

		$conn = new PDO("mysql:host=$servername", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE iguane";
		$conn->exec($sql);
		echo "<div class=\"mb-4 alert alert-success\">Database created successfully ! <a href=\"/\">Click here !</a></div>";
		$conn = null;
		
		function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath) {
			$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
			$templine = '';
			$lines = file($filePath);
			$error = '';
			foreach ($lines as $line){
				if(substr($line, 0, 2) == '--' || $line == '') {
					continue;
				}
				$templine .= $line;
				if (substr(trim($line), -1, 1) == ';') {
					if(!$db->query($templine)){
						$error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
					}
					$templine = '';
				}
			}
			return !empty($error)?$error:true;
		}
		
		restoreDatabaseTables("127.0.0.1", "root", "", "iguane", "sql/iguane.sql");
		header("Refresh: 10; Location: /");
	}
	
	echo "</div>";
}
