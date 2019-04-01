<?php

class Title extends Element
{

    private $isMultiple = true;

    public function getElement()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 3');
        return $req;
    }

    public function integrate()
    {
        $element = $this->getElement();
        while ($data = $element->fetch()) {
            echo "<h1 class=\"text-center\">" . $data['content'] . "</h1>";
        }
    }
}
