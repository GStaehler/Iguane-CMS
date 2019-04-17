<?php

class Facebook extends Element
{

    function __construct($layout, $page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 10 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            echo "<a href=\"" . $data['content'] . "\" ><i class=\"fab fa-facebook fa-3x\"></i></a>";
        }
    }
}
