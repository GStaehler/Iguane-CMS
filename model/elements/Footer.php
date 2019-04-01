<?php

class Footer extends Element
{

    private $isMultiple = false;

    public function integrate($layout)
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 4 AND element.layout = ' . $layout);
        while ($data = $req->fetch()) {
            echo "<footer><div class=\"text-center\"><p class=\"text-muted\">© " . date("Y") . " - " . $data['content'] . "</p></div></footer>";
        }
    }
}
