<?php
require('controller/controller.php');
require('model/Page.php');
?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gauthier Staehler">
    <?php $bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
    $req = $bdd->query('SELECT element.content FROM element WHERE element.type = 2'); ?>
    <title><?php while ($data = $req->fetch()) { echo $data['content'] . " - "; } ?>Home</title>
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/83/83946.png">
    <style><?php require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css"); ?></style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
    <style><?php require_once("style/view.css"); ?></style>
</head>

<body <?php $background = new Background; ?> >
    <div style="font-family: 'Noto Sans', sans-serif;">
        <a class="fas fa-cogs fa-3x" href="/admin"></a>
        <?php
        $page = new Page(0);
        ?>
    </div>
</body>

</html>
