<?php
require('controller/controller.php');
require('model/Page.php');
?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Gauthier Staehler">
    <?php require("model/database.php");
    $req = $bdd->query('SELECT element.content FROM element WHERE element.type = 2'); ?>
    <title><?php while ($data = $req->fetch()) { echo $data['content'] . " - "; } ?>Home</title>
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/83/83946.png">
	<script src="../vendor/jquery-3.4.0.js"></script>
    <style><?php require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css"); ?></style>
	<script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
    <style><?php require_once("style/view.css"); ?></style>
</head>

<body <?php $background = new Background; ?> >
    <div style="font-family: 'Noto Sans', sans-serif;">
        <!-- <a class="fas fa-cogs fa-3x" href="/admin"></a> -->
        <?php
        $page = new Page(0);
		
		$req = $bdd->query('SELECT COUNT(*) FROM element');
		if ($req->fetchColumn() == 0) { // IF ELEMENT TABLE IS EMPTY -- WELCOME TEXT
			echo "<div class=\"container text-center\"><h1 style=\"font-family: 'Indie Flower';\">Iguane CMS</h1><br>Thank you for using Iguane CMS ! To start editing your website and create your first element, go to <a href=\"/admin\"><span class=\"lead ml-2 mr-2\">/admin</span></a> ! <br><br>Default username and password : admin<hr class=\"m-4\"><a href=\"https://github.com/GStaehler/Iguane-CMS\" target=\"_blank\" class=\"fab fa-github fa-2x\"></a></div>";
		}
        ?>
    </div>
</body>

</html>
