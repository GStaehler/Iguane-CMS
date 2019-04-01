<?php

class Text extends Element
{

    private $isMultiple = true;

    public function integrate($layout)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content, element.layout FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 5 AND element.layout = ' . $layout);
        while ($data = $req->fetch()) {
            echo "<p>" . $data['content'] . "</p>";
        }
    }
}
