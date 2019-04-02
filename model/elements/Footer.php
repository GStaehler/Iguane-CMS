<?php

class Footer extends Element
{

    private $isMultiple = false;

    public function integrate()//: void
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 4');
        while ($data = $req->fetch()) {
            echo "<footer><div class=\"text-center\"><p class=\"text-muted\">&copy; " . date("Y") . " - " . $data['content'] . "</p></div></footer>";
        }
    }
}
