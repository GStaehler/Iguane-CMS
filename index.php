<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
$req = $bdd->query('SELECT page.id, page.name, site.theme as theme FROM site, page');

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

while ($data = $req->fetch()) {
    switch ($request_uri[0]) {
            case '/'.str_replace(' ', '', $data['name']): // GENERATED PAGES
                require('model/elements/Element.php');
                require('model/elements/Image.php');
                require('model/elements/Video.php');
                require('model/elements/Table.php');
                require('model/elements/Navbar.php');
                require('model/elements/Title.php');
                require('model/elements/Footer.php');
                require('model/elements/Text.php');
                require('model/elements/Background.php');
                require('model/layouts/Layout.php');
                require('model/layouts/LayoutMain.php');
                require('model/layouts/LayoutAside.php');
                require('model/layouts/LayoutBottom.php');
                require('model/layouts/LayoutHeader.php');
                require('model/layouts/LayoutFooter.php');
                require('model/NewPage.php');
                echo "<title>" . $data['name'] . "</title>";
                echo "<link rel=\"icon\" href=\"https://image.flaticon.com/icons/png/512/83/83946.png\">";
                echo "<style>";
                require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css");
                echo "</style>";
                echo "<style>";
                require_once("style/view.css");
                echo "</style>";
                echo "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">";
                echo "<body";
                $background = new Background;
                $background->integrate();
                echo ">";
                echo  "<a class=\"fas fa-cogs fa-3x\" href=\"/admin\"></a>";
                echo "<div id=\"layoutHeader\">";
                $navbar = new Navbar;
                $navbar->integrate();
                if ($data['theme'] == 2) { // CHANGE THEME
                    echo "<h1 class=\"text-center darkTheme\">" . $data['name'] . "</h1>";
                }
                else {
                    echo "<h1 class=\"text-center\">" . $data['name'] . "</h1>";
                }
                echo "</div>";
                $page = new NewPage;
                $page->integrate($data['id']);
                $layoutFooter = new LayoutFooter;
                $layoutFooter->integrate();
                echo "</body></html>";
                break;
            case '/': // HOME PAGE
                require_once 'view/view.php';
                break;
            case '/admin': // ADMIN PAGE
                require_once 'view/admin.php';
                break;
            default:
                // header('HTTP/1.0 404 Not Found');
                // require 'view/404.php';
                break;
    }
}
