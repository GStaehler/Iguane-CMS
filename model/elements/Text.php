<?php

class Text extends Element
{

    private $isMultiple = true;

    public function integrate($layout, $page)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 5 AND element.layout = ' . $layout . ' AND element.page = ' . $page);
        while ($data = $req->fetch()) {
            echo "<p>" . $data['content'] . "</p>";
        }
    }
}
