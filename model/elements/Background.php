<?php

class Background extends Element
{

    private $isMultiple = false;

    public function getElement()
    {
        global $bdd;
        parent::getDatabase();
        $req = $bdd->query('SELECT element.content FROM element INNER JOIN type ON element.type = type.id WHERE element.type = 6');
        return $req;
    }

    public function integrate()
    {
        $element = $this->getElement();
        while ($data = $element->fetch()) {
            echo " style=\"background-image: url(" . $data['content'] . "); background-size: cover;\"";
        }
    }
}
