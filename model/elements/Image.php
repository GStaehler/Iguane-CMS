<?php

class Image extends Element
{

    private $isMultiple = true;

    public function integrate($layout, $page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 7 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            echo "<img class=\"imageElement\" src=\"" . $data['content'] . "\">";
        }
    }
}