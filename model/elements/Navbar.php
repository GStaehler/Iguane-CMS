<?php

class Navbar extends Element
{

    function __construct()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 2');
        while ($data = $req->fetch()) {
            echo "<header><nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\" style=\"background-color: #212529 !important;\">
                <a class=\"navbar-brand\" style=\"position: relative; bottom: 1px;\" href=\"/\">" . $data['content'] . "</a>
				<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
				<span class=\"navbar-toggler-icon\"></span></button>
				<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
				
                <ul class=\"navbar-nav mr-auto\">";
            $bdd2 = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
            $req2 = $bdd2->query('SELECT page.name FROM page');
            while($data2 = $req2->fetch()) {
                if ($data2['name'] !== "0") {
                    echo "<li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"/" . str_replace(' ', '', $data2['name']) . "\">" . $data2['name'] . "</a>
                          </li>";
                }
            }
        echo "</ul></div></nav></header>";
        }
    }
}
