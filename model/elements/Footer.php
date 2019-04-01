<?php

class Footer extends Element
{

    private $isMultiple = false;

    public function getElement()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 4');
        return $req;
    }

    public function integrate()
    {
        $element = $this->getElement();
        while ($data = $element->fetch()) {
            echo "<footer><div class=\"text-center\"><p class=\"text-muted\">© " . date("Y") . " - " . $data['content'] . "</p></div></footer>";
        }
    }
}
