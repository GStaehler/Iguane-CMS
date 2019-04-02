<?php

class Title extends Element
{

    private $isMultiple = false;

    public function integrate(): void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 3');
        while ($data = $req->fetch()) {
            echo "<h1 class=\"text-center\">" . $data['content'] . "</h1>";
        }
    }
}
