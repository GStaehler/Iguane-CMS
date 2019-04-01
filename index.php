<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=filrougephp;charset=utf8', 'root', '');
$req = $bdd->query('SELECT page.name, element.content as content FROM page, element WHERE element.type = 2');

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/':
        require 'view/view.php';
        break;
    case '/admin':
        require 'view/admin.php';
        break;
    /* default:
        header('HTTP/1.0 404 Not Found');
        require 'view/404.php';
        break; */
}

while ($data = $req->fetch()) {
    switch ($request_uri[0]) {
            case '/'.str_replace(' ', '', $data['name']):
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
                echo "<title>" . $data['content'] . " - " . $data['name'] . "</title>";
                echo "<style>";
                require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css");
                echo "</style>";
                echo "<style>";
                require_once("view/view.css");
                echo "</style>";
                echo "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">";
                echo "<body";
                $background = new Background;
                $background->integrate();
                echo ">";
                echo  "<a class=\"fas fa-cogs fa-3x\" href=\"/admin\"></a>";
                $navbar = new Navbar;
                $navbar->integrate();
                echo "<h1 class=\"text-center\">" . $data['name'] . "</h1>";
                $layoutFooter = new LayoutFooter;
                $layoutFooter->integrate();
                echo "</body></html>";
                break;
    }
}
