<?php

class Code extends Element
{

    function __construct($layout, $page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout, site.theme AS theme FROM site, element INNER JOIN type ON element.type = type.id WHERE element.type = 9 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            echo $data['content'];
        }
    }
}
