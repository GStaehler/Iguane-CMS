<?php
require('model/elements/Element.php');
require('model/elements/Table.php');
require('model/elements/Navbar.php');
require('model/elements/Title.php');
require('model/elements/Footer.php');
require('model/elements/Text.php');
require('model/elements/Background.php');
require('model/layouts/LayoutMain.php');
require('model/layouts/LayoutAside.php');
require('model/layouts/LayoutHeader.php');
require('model/layouts/LayoutFooter.php');
require('model/Page.php');
?>

<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Gauthier Staehler">
    <?php $bdd = new PDO('mysql:host=127.0.0.1;dbname=filrougephp;charset=utf8', 'root', '');
    $req = $bdd->query('SELECT element.content FROM element WHERE element.type = 2'); ?>
    <title><?php while ($data = $req->fetch()) { echo $data['content'] . " - "; } ?>Home</title>
    <style><?php require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css"); ?></style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style><?php require_once("view.css"); ?></style>
</head>

<body <?php $background = new Background; $background->integrate(); ?> >
    <a class="fas fa-cogs fa-3x" href="/admin"></a>
    <?php
    $page = new Page;
    $page->integrate(0);
    ?>
</body>

</html>
