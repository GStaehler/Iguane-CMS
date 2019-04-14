<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
$req = $bdd->query('SELECT page.id, page.name, site.theme as theme FROM site, page');

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

while ($data = $req->fetch()) {
    switch ($request_uri[0]) {
            case '/'.str_replace(' ', '', $data['name']): // GENERATED PAGES
                require('controller/controller.php');
                require('model/NewPage.php');
			    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
                echo "<title>" . $data['name'] . "</title>";
                echo "<link rel=\"icon\" href=\"https://image.flaticon.com/icons/png/512/83/83946.png\">";
			    echo "<script src=\"vendor/jquery-3.4.0.js\"></script>";
                echo "<style>";
                require_once("vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css");
                echo "</style>";
			    echo "<script src=\"vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js\"></script>";
                echo "<style>";
                require_once("style/view.css");
                echo "</style>";
                echo "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">";
                echo "<link href=\"https://fonts.googleapis.com/css?family=Noto+Sans\" rel=\"stylesheet\">";
                echo "<body";
                $background = new Background;
                echo ">";
                echo "<div style=\"font-family: 'Noto Sans', sans-serif;\">";
                echo  "<a class=\"fas fa-cogs fa-3x\" href=\"/admin\"></a>";
                echo "<div id=\"layoutHeader\">";
                $navbar = new Navbar;
                if ($data['theme'] == 2) { // CHANGE THEME
                    echo "<h1 class=\"text-center darkTheme\">" . $data['name'] . "</h1>";
                }
                else {
                    echo "<h1 class=\"text-center\">" . $data['name'] . "</h1>";
                }
                echo "</div>";
                $page = new NewPage($data['id']);
                $layoutFooter = new LayoutFooter;
                echo "</div></body></html>";
                break;
            case '/': // HOME PAGE
                require_once 'view/view.php';
                break;
            case '/admin': // ADMIN PAGE
                if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                    require_once 'view/admin.php';
                }
                else {
                    require_once 'view/login/login.php';
                }
                break;
            default:
                // header('HTTP/1.0 404 Not Found');
                // require 'view/404.php';
                break;
    }
}
