<?php

class Navbar extends Element
{

    public function integrate(): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 2');
        while ($data = $req->fetch()) {
            echo "<header><nav class=\"navbar navbar-dark bg-dark\" style=\"background-color: #212529 !important;\">
                <a class=\"navbar-brand\" href=\"/\">" . $data['content'] . "</a>
                <ul class=\"navbar-nav d-flex flex-row justify-content-start\" style=\"position: absolute; left: 162px;\">";
            $bdd2 = new PDO('mysql:host=127.0.0.1;dbname=iguane;charset=utf8', 'root', '');
            $req2 = $bdd2->query('SELECT page.name FROM page');
            while($data2 = $req2->fetch()) {
                if ($data2['name'] !== "0") {
                    echo "<li class=\"nav-item\">
                            <a class=\"nav-link ml-4\" href=\"/" . str_replace(' ', '', $data2['name']) . "\">" . $data2['name'] . "</a>
                          </li>";
                }
            }
        echo "</ul></nav></header>";
        }
    }
}
